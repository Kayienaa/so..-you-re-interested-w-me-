<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default bg-white rounded mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-secondary-soft border-b border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Github
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Demo Link
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $item)
                            <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                                <td class="px-6 py-4 text-center align-middle">
                                    {{ $item->image }}
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    {{ $item->title }}
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    {{ $item->description }}
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    {{ $item->github }}
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    {{ $item->link }}
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
