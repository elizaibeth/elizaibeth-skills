<?php

namespace App\View;

use App\Models\Customer;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Builds the admin shell's navigation from the current route: the sidebar entry to mark, the tabs of the
 * record or section on the page, and the breadcrumbs. The sidebar itself is the same on every page.
 *
 * Register it in a service provider's boot method: View::composer('layouts.admin', AdminNavigation::class);
 */
class AdminNavigation
{
    public function __construct(private Request $request) {}

    public function compose(View $view): void
    {
        [$customer, $project] = $this->context();
        $section = match (true) {
            $this->request->routeIs('dashboard') => 'dashboard',
            $this->request->routeIs('invoices.*') => 'invoices',
            $this->request->routeIs('settings.*', 'users.*') => 'settings',
            $this->request->routeIs('projects.*') || $project !== null => 'projects',
            default => 'customers',
        };
        $crumbs = [];
        $tabs = match ($section) {
            'settings' => $this->tabs('Settings', null, [
                ['General', route('settings.edit'), 'settings.*'],
                ['Users', route('users.index'), 'users.*'],
            ]),
            default => null,
        };
        if ($customer !== null) {
            // The breadcrumbs follow ownership: customer, then project.
            $crumbs = [['Customers', route('customers.index')], [$customer->name, route('customers.show', $customer)]];
            $tabs = $this->tabs('Customer', $customer->name, [
                ['Overview', route('customers.show', $customer), ['customers.show', 'customers.edit']],
                ['Projects', route('customers.projects.index', $customer), 'customers.projects.index'],
                ['Invoices', route('customers.invoices.index', $customer), 'customers.invoices.*'],
            ]);
        }
        if ($customer !== null && $project !== null) {
            $crumbs[] = [$project->name, route('customers.projects.show', [$customer, $project])];
            $tabs = $this->tabs('Project', $project->name, [
                ['Overview', route('customers.projects.show', [$customer, $project]), ['customers.projects.show', 'customers.projects.edit']],
                ['Tasks', route('customers.projects.tasks.index', [$customer, $project]), 'customers.projects.tasks.*'],
            ]);
        }

        $view->with('navigation', ['section' => $section, 'tabs' => $tabs, 'crumbs' => $crumbs]);
    }

    /** @return array{Customer|null, Project|null} The records the current route is about, from its parameters. */
    private function context(): array
    {
        $route = $this->request->route();
        $customer = $route?->parameter('customer');
        $customer = $customer instanceof Customer ? $customer : (is_scalar($customer) ? Customer::find($customer) : null);
        $project = $route?->parameter('project');
        $project = $project instanceof Project ? $project : ($customer !== null && is_scalar($project) ? $customer->projects()->find($project) : null);

        return [$customer, $project];
    }

    /**
     * @param  list<array{string, string, string|list<string>}>  $links  label, URL and the route names that the tab covers
     * @return array{kind: string, title: string|null, links: list<array{label: string, url: string, active: bool}>}
     */
    private function tabs(string $kind, ?string $title, array $links): array
    {
        return ['kind' => $kind, 'title' => $title, 'links' => array_map(
            fn (array $link): array => ['label' => $link[0], 'url' => $link[1], 'active' => $this->request->routeIs(...(array) $link[2])],
            $links,
        )];
    }
}
