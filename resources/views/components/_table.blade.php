<div class="overflow-x-auto">
    <div class="flex justify-end mb-4">
        <a href=""
           class="mr-3 inline-block px-6 py-3 font-bold text-center bg-gradient-to-tl from-purple-700 to-pink-500 uppercase align-middle transition-all rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-white">
            Inserir novo registro
        </a>
    </div>
    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
        <thead class="align-bottom">
            <tr>
                <th class="px-6 py-3 font-bold tracking-normal text-left uppercase bg-transparent border-b text-xxs whitespace-nowrap text-slate-400 opacity-70">
                    Logo
                </th>
                <th class="px-6 py-3 font-bold tracking-normal text-left uppercase bg-transparent border-b text-xxs whitespace-nowrap text-slate-400 opacity-70">
                    SIGLA
                </th>
                <th class="px-6 py-3 font-bold tracking-normal text-left uppercase bg-transparent border-b text-xxs whitespace-nowrap text-slate-400 opacity-70">
                    Nome
                </th>
                <th class="px-6 py-3 font-bold tracking-normal text-center uppercase bg-transparent border-b text-xxs whitespace-nowrap text-slate-400 opacity-70">
                    Ações
                </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <img src="" alt="" class="w-8 h-8 rounded-full">
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <a href="" class="text-sm font-semibold text-blue-500 hover:text-blue-700 mr-2">Editar</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm font-semibold text-red-500 hover:text-red-700" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center py-6">
                        Ainda não tem registros.
                    </td>
                </tr>
        </tbody>
    </table>
</div>