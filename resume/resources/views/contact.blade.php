<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
               <p> Do you have any question? Please do not hesitate to contact. I will come back to you within a matter of hours to help you.</p>
               <div class="col-sm-9 mb-5">
                <form action="">
                    <div class="row gap-3">
                        <div class="col-md-12">
                            <label for="inputName">Youe Name</label>
                            <input type="text" class="form-control mt-2" id="inputName">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail">Youe Email</label>
                            <input type="text" class="form-control mt-2" id="inputEmail">
                        </div>
                        <div class="col-md-12">
                            <label for="inputsubject">Youe Subject</label>
                            <input type="text" class="form-control mt-2" id="inputsubject">
                        </div>
                        <div class="col-md-12">
                            <label for="inputTextarea">Youe Message*</label>
                           <textarea class="form-control mt-2" name="form-control mt-2" id="inputTextarea"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Send</button>
                </form>
               </div>
               <div class="col-sm-3 text-center">
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                        <p>surat,gujrat, india</p>
                    </li>
                    <li>
                        <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                        <p>+91 3364747366</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                        <p>contact@gmail.com</p>
                    </li>
                </ul>
               </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-dribbble i-color mx-3"></i></a>
        </div>
    </x-slot>
    </x-layout>
