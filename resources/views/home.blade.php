<x-layout>
    <x-slot name="title"> Home    </x-slot>
    <x-slot name="content">
        <div class="mt-5">
       <div class="text-center">
           <img src="{{ asset('/images/th.jpg') }}" alt="" class="img-thumbnail" width="250px" height="150px">
       </div>
       <div class="mt-5 text-white mx=5 test-justify">
           <h1 class="fw-bold st-font">Hello Bro,</h1>
           <div class="px-4" style="line-height: 2rem;">
            <p style="text-warning">Pranay Lode <b>its having a full stack developer in the world and very powerfull in the country and all over the world.</p>
            <p style="text-indent:100px;"> developer in the world and very powerfull in the country and all over the world</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, inventore alias quisquam, sequi doloremque saepe qui cumque obcaecati fuga placeat molestias modi laboriosam ipsa? Reprehenderit saepe asperiores sunt omnis debitis.</p>
           
        </div>
       </div>
       <div class="text-center">
           <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-5">HIre Me</a>
           <a href="{{route('contact')}}" class="btn btn-outline-info mx-5 my-5">Contact</a>
       </div>
       </div>
        </x-slot>
</x-layout>