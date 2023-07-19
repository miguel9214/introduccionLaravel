@csrf
<label class="uppercase text-white-700 text-xs" style="color: white">Titulo</label>
<span class="text-xs text-red-600">@error('title')
    {{$message}}
@enderror</span>
<input class="rounded border-gray-200 w-full mb-4 text-black-300" name="title" type="text" value="{{old('title',$post->title)}}">

<label class="uppercase text-white-700 text-xs" style="color: white">Slug</label>
<span class="text-xs text-red-600">@error('slug')
    {{$message}}
@enderror</span>
<input class="rounded border-gray-200 w-full mb-4 text-black-300" name="slug" type="text" value="{{old('slug',$post->slug)}}">

<label class="uppercase text-white-700 text-xs" style="color: white">Contenido</label>
<span class="text-xs text-red-600">@error('body')
    {{$message}}
@enderror</span>
<textarea rows="5" class="rounded border-black-200 w-full mb-4 text-black-300" name="body">{{old('body',$post->body)}}</textarea>

<div class="flex items-center justify-between ">
    <a class="text-indigo-600 rounded px-4 py-2" href="{{ route('posts.index') }}" style="background-color: white">Volver</a>
    <input class="bg-white-800 text-white rounded px-4 py-2" type="submit" value="Enviar" style="background-color: green">
</div>
