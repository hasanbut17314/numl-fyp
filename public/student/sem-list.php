<?php include "includes/template.php" ?>

<div class="bg-white text-sm flex justify-between p-7 rounded-3xl my-3">
    <div class="grid grid-cols-2 std_details">
        <div class="font-semibold">
            <p>Department:</p>
            <p>Faculty:</p>
            <p>Department:</p>
        </div>
        <div>
            <p>Software Engineering</p>
            <p>Computer Science Engineering</p>
            <p>Software Engineering</p>
        </div>
    </div>
    <div>
        <div class="flex bg-[#E6E6E6] w-40 justify-between items-center p-2 rounded-t-lg">
            <p class="font-semibold">Select</p>
            <span class="material-symbols-outlined">arrow_drop_down</span>
        </div>
    </div>
</div>

<div class="rounded-3xl bg-white overflow-hidden">
    <table class="w-full text-sm">
        <thead>
            <tr class="bg-[#D9D9D9] w-full p-3">
                <th class="text-left p-2">S.No</th>
                <th class="text-left flex flex-grow py-2">Semesters</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="px-2">
            <tr>
                <td class="px-2">1</td>
                <td>Semester-1</td>
                <td class="flex items-center justify-end px-2">
                    <a href="#" class="text-sm font-semibold">view</a>
                    <a href="#" class="px-2 mt-1"><span class="material-symbols-outlined">download</span></a>
                </td>
            </tr>
            <tr>
                <td class="px-2">2</td>
                <td>Semester-2</td>
                <td class="flex items-center justify-end px-2">
                    <a href="#" class="text-sm font-semibold">view</a>
                    <a href="#" class="px-2 mt-1"><span class="material-symbols-outlined">download</span></a>
                </td>
            </tr>
            <tr>
                <td class="px-2">4</td>
                <td>Semester-4</td>
                <td class="flex items-center justify-end px-2">
                    <a href="#" class="text-sm font-semibold">view</a>
                    <a href="#" class="px-2 mt-1"><span class="material-symbols-outlined">download</span></a>
                </td>
            </tr>
            <tr>
                <td class="px-2">5</td>
                <td>Semester-5</td>
                <td class="flex items-center justify-end px-2">
                    <a href="#" class="text-sm font-semibold">view</a>
                    <a href="#" class="px-2 mt-1"><span class="material-symbols-outlined">download</span></a>
                </td>
            </tr>
            <tr>
                <td class="px-2">6</td>
                <td>Semester-6</td>
                <td class="flex items-center justify-end px-2">
                    <a href="#" class="text-sm font-semibold">view</a>
                    <a href="#" class="px-2 mt-1"><span class="material-symbols-outlined">download</span></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<a href="index.php" class="flex flex-col text-[#2B2941] mt-2 text-sm">
    <p class="font-semibold mb-0">Back</p>
    <span class="material-symbols-outlined mt-0">arrow_left_alt</span>
</a>

<?php include "includes/footer.php" ?>