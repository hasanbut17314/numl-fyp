<?php include "includes/template.php" ?>

<div class="flex bg-white px-3 py-5 rounded-3xl gap-x-4 mb-2">
    <div>
        <img src="../../assets/images/Rectangle 1.jpg" class="h-[138px]">
    </div>
    <div class="flex flex-col">
        <h2 class="font-semibold text-2xl mb-2">Ahsan Raja</h2>
        <p class="font-semibold mb-2">System Id: <span class="font-light">Numl-S20-423</span></p>
        <p class="font-semibold mb-2">Department: <span class="font-light">Admin Branch</span></p>
    </div>
</div>

<div class="grid md:grid-cols-3 font-semibold gap-6 md:mt-20 mt-4">
    <a href="create-profile.php" class="bg-[#8ea1e6a6] hover:shadow-lg shadow-[#8EA1E6] duration-300 hover:cursor-pointer transition-all rounded-lg h-56 w-full flex flex-col justify-center items-center nav-cont1">
        <p>Create Profile</p>
        <span class="material-symbols-outlined arrow-nav1">arrow_right_alt</span>
    </a>
    <a href="manage-courses.php" class="bg-[#8ea1e6a6] hover:shadow-lg shadow-[#8EA1E6] duration-300 hover:cursor-pointer transition-all rounded-lg h-56 w-full flex flex-col justify-center items-center nav-cont2">
        <p>Manage Courses</p>
        <span class="material-symbols-outlined arrow-nav2">arrow_right_alt</span>
    </a>
    <a class="bg-[#8ea1e6a6] hover:shadow-lg shadow-[#8EA1E6] duration-300 hover:cursor-pointer transition-all rounded-lg h-56 w-full flex flex-col justify-center items-center nav-cont3">
        <p>Manage Profile</p>
        <span class="material-symbols-outlined arrow-nav3">arrow_right_alt</span>
    </a>
</div>

<?php include "includes/footer.php" ?>