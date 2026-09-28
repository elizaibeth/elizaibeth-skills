export const tomSelect = {
  author: {
    valueField: "id",
    searchField: "title",
    options: [
      {
        id: 1,
        name: "John Doe",
        job: "Web designer",
        src: "/images/components/bb-avatar.svg",
      },
      {
        id: 2,
        name: "Emilie Watson",
        job: "Developer",
        src: "/images/components/bb-avatar.svg",
      },
      {
        id: 3,
        name: "Nancy Clarke",
        job: "Software Engineer",
        src: "/images/components/bb-avatar.svg",
      },
    ],
    placeholder: "Select the author",
    render: {
      option: function (data, escape) {
        return `<div class="flex space-x-3">
                      <div class="bb-avatar w-8 h-8">
                        <img class="rounded-full" src="${escape(
                          data.src
                        )}" alt="avatar"/>
                      </div>
                      <div class="flex flex-col">
                        <span> ${escape(data.name)}</span>
                        <span class="text-xs opacity-80"> ${escape(
                          data.job
                        )}</span>
                      </div>
                    </div>`;
      },
      item: function (data, escape) {
        return `<span class="bb-badge rounded-full bg-brand dark:bg-signal text-white p-px mr-2">
                      <span class="bb-avatar w-6 h-6">
                        <img class="rounded-full" src="${escape(
                          data.src
                        )}" alt="avatar">
                      </span>
                      <span class="mx-2">${escape(data.name)}</span>
                    </span>`;
      },
    },
  },

  assignedTodo: {
    valueField: "id",
    searchField: "title",
    options: [
      {
        id: 1,
        name: "John Doe",
        job: "Web designer",
        src: "/images/components/bb-avatar.svg",
      },
      {
        id: 2,
        name: "Emilie Watson",
        job: "Developer",
        src: "/images/components/bb-avatar.svg",
      },
      {
        id: 3,
        name: "Nancy Clarke",
        job: "Software Engineer",
        src: "/images/components/bb-avatar.svg",
      },
    ],
    placeholder: "Select the user",
    render: {
      option: function (data, escape) {
        return `<div class="flex space-x-3">
                      <div class="bb-avatar w-8 h-8">
                        <img class="rounded-full" src="${escape(
                          data.src
                        )}" alt="avatar"/>
                      </div>
                      <div class="flex flex-col">
                        <span> ${escape(data.name)}</span>
                        <span class="text-xs opacity-80"> ${escape(
                          data.job
                        )}</span>
                      </div>
                    </div>`;
      },
      item: function (data, escape) {
        return `<span class="inline-flex items-center">
        <span class="bb-avatar w-6 h-6">
            <img class="rounded-full" src="${escape(
              data.src
            )}" alt="avatar">
        </span>
        <span class="mx-2">${escape(data.name)}</span>
      </span>`;
      },
    },
  },
};
