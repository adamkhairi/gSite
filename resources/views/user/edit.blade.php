<form action="" class="w-full">

    @csrf

    <div class="flex justify-center items-center p-4">
        <div>


            <div class="flex">
                <div class="mr-4 flex flex-col">
                    <label for="name">Name</label>
                    <input class="mt-2" type="text" name="name" id="name" value="">
                </div>

                <div class=" flex flex-col">
                    <label for="email">Email</label>
                    <input class="mt-2" type="text" name="email" id="email" value="">
                </div>
            </div>
            <div class="flex">
                <div class="mr-4 flex flex-col">
                    <label for="birthday">Birthday</label>
                    <input class="mt-2" type="text" name="birthday" id="birthday" value="">
                </div>

                <div class=" flex flex-col">
                    <label for="genre">Gender</label>
                    <select class="" name="genre" id="genre">
                        <option selected value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                    <label for="email">Email</label>
                    <input class="mt-2" type="text" name="email" id="email" value="">
                </div>
            </div>
        </div>


    </div>
</form>

