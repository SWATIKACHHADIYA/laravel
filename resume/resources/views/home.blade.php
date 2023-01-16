<x-layout>
<x-slot name='title'>Home</x-slot>
<x-slot name='content'>
    <div class="mt-5">
        <div class="text-center">
            <img src="{{asset('images/pic1.jpg')}}" alt="" class="img-thumbnail" width="250px" height="150px">
        </div>
        <div class="mt-5 text-white mx-5 text-justify">
            <h1 class="fw-bold st-font">Hello,</h1>
            <div class="px-4" style="line-height: 2rem;">
            <p style="text-indent: 100px;">I am <b>Swati Kachhadiya</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis adipisci praesentium inventore iure autem molestiae? Blanditiis odit magni voluptate. Voluptatum debitis reiciendis magnam ex hic?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat doloremque corrupti officia, obcaecati vitae, labore vel iusto qui rerum nulla et mollitia eum iste, ullam sit vero optio minima quod?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat et obcaecati dicta similique deleniti, perferendis harum debitis! Neque voluptatem, inventore omnis, deleniti quo iure necessitatibus hic eaque quos culpa corrupti. Atque incidunt quaerat aliquam natus, veritatis temporibus laudantium qui magnam quod neque id recusandae? Incidunt.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire me</a>
            <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
        </div>
    </div>
</x-slot>
</x-layout>
