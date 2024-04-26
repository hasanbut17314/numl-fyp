<?php include "includes/template.php" ?>

<style>
    .hedings p{
        margin-bottom: 30px;
    }
    .inputs input {
        margin-bottom: 18px;
    }
</style>

<div class="py-3">
    <h1 class="text-2xl font-bold mb-4">Manage Course:</h1>
</div>

<form class="font-semibold grid grid-cols-12 gap-x-5">
    <div class="hedings md:col-span-3 col-span-6">
        <p class="mt-2">Course Name:</p>
        <p>Course Id:</p>
        <p>Department:</p>
        <p>Faculty:</p>
        <p>Credit hr:</p>
    </div>
    <div class="inputs flex flex-col md:col-span-3 col-span-6">
        <input type="text" name="course_name" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="course_id" placeholder="e.g numl-s20-86651" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="department" placeholder="e.g Software Engineering" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="faculty" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="credit_hr" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
    </div>
    <div class="flex md:col-span-6 col-span-10">
        <a href="#" class="px-5 py-2 bg-[#D9D9D9] rounded-lg text-sm mx-2 self-start">+Add Course</a>
        <a href="#" class="px-5 py-2 bg-[#D9D9D9] rounded-lg text-sm mx-2 self-start">Edit Course</a>
        <a href="#" class="px-5 py-2 bg-[#D9D9D9] rounded-lg text-sm mx-2 self-start">-Delete Course</a>
    </div>
</form>

<a href="index.php" class="flex flex-col text-[#2B2941] mt-8 text-sm absolute bottom-3">
    <p class="font-semibold mb-0">Back</p>
    <span class="material-symbols-outlined mt-0">arrow_left_alt</span>
</a>

<?php include "includes/footer.php" ?>