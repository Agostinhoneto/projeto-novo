<div class="w-full flex justify-center mt-6">
    <div class="w-full max-w-3xl">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-6">
                @if ($errors->any())
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-red-600 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="space-y-6 w-full">
                    @csrf
                    @if($method !== 'POST')
                        @method($method)
                    @endif

                    {{-- Exibe a imagem atual, se existir --}}
                    <div class="flex justify-center mb-4">
                        @if(!empty($item->logo))
                            <img src="{{ asset($item->logo) }}" alt="Logo" id="preview-image" class="rounded shadow" style="width:100px; height:100px; object-fit:cover;">
                        @else
                            <img src="#" alt="Preview" id="preview-image" class="rounded shadow hidden" style="width:100px; height:100px; object-fit:cover;">
                        @endif
                    </div>

                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <input type="file" name="logo" id="logo"
                            class="block w-full mt-1 border rounded-lg px-3 py-2 text-gray-700" onchange="previewFile()">
                        @error('logo')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="sigla" class="block text-sm font-medium text-gray-700">SIGLA</label>
                        <input type="text" name="sigla" id="Sigla"
                            value="{{ old('sigla', $item->sigla ?? '') }}"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 w-full rounded-lg border border-gray-300 px-3 py-3 font-normal text-gray-700 placeholder:text-gray-500 focus:border-fuchsia-300">
                        @error('sigla')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome" id="nome"
                            value="{{ old('nome', $item->nome ?? '') }}"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 w-full rounded-lg border border-gray-300 px-3 py-3 font-normal text-gray-700 placeholder:text-gray-500 focus:border-fuchsia-300">
                        @error('nome')
                            <span class="text-red-600 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="submit"
                            class="px-6 py-3 font-bold text-center bg-gradient-to-tl from-purple-700 to-pink-500 uppercase rounded-lg text-xs text-white hover:scale-102 active:opacity-85 hover:shadow-soft-xs">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Função para pré-visualizar a imagem selecionada
    function previewFile() {
        const preview = document.getElementById('preview-image');
        const file = document.querySelector('input[type=file]').files[0];
        const reader = new FileReader();

        if (file) {
            reader.onloadend = function () {
                preview.src = reader.result;
                preview.classList.remove('hidden'); // Mostra a imagem
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.classList.add('hidden'); // Oculta a imagem se nenhum arquivo for selecionado
        }
    }

    // Inicializa a visualização caso já exista uma imagem no servidor
    window.addEventListener('DOMContentLoaded', () => {
        const preview = document.getElementById('preview-image');
        if (!preview.src || preview.src === '#') {
            preview.classList.add('hidden'); // Oculta se não houver imagem inicial
        }
    });
</script>