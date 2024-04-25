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
    <h1 class="text-2xl font-bold mb-4">Create Profile</h1>
    <div class="my-3 flex items-center font-semibold">
        <p>User Type:</p>
        <a href="create-profile.php" class="px-9 py-3 bg-[#D9D9D9] rounded-lg text-sm mx-5">Student</a>
        <a href="create-coordinator.php" class="px-9 py-3 bg-[#D9D9D9] rounded-lg text-sm me-5">Coordinator</a>
        <a href="create-exam-branch.php" class="px-9 py-3 bg-[#8EA1E6] rounded-lg text-sm">Exam Branch</a>
    </div>
</div>

<form class="font-semibold grid lg:grid-cols-4 grid-cols-2 gap-x-5">
    <div class="hedings">
        <p class="mt-2">Name:</p>
        <p>Employee Id:</p>
        <p>Branch:</p>
        <p>Email:</p>
    </div>
    <div class="inputs flex flex-col">
        <input type="text" name="name" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="employee_id" placeholder="e.g numl-s20-86651" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="branch" placeholder="e.g Software Engineering" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="email" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
    </div>
    <div class="hedings">
        <p class="md:mt-2">Phone No:</p>
        <p>Designation:</p>
        <p>Campus:</p>
    </div>
    <div class="inputs">
        <input type="text" name="phone_no" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="designation" placeholder="e.g engineering" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
        <input type="text" name="campus" class="bg-[#D9D9D9] py-3 px-4 outline-none text-xs">
    </div>
    <div class="flex">
        <button type="submit" name="create_exam-branch_btn" class="px-8 py-3 bg-[#8EA1E6] rounded-lg text-sm">Create</button>
    </div>
</form>

<a href="index.php" class="flex flex-col text-[#2B2941] mt-8 text-sm">
    <p class="font-semibold mb-0">Back</p>
    <span class="material-symbols-outlined mt-0">arrow_left_alt</span>
</a>

<?php include "includes/footer.php" ?>