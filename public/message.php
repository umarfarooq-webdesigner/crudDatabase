<?php
if (isset($_SESSION['message'])) :
?>

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->


    <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-100 dark:text-green-400" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill text-green-800" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>

        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            A student information is successfully inserted. Click Here to check <a href="students_detail.php" class="font-semibold underline hover:no-underline text-green-800">Student Details</a>.
            <?= $_SESSION['message']; ?>
        </div>

        <button type="button" class="ml-auto  mr-2 -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-800 dark:text-white dark:hover:bg-rose-600" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        
    </div>




<?php
    unset($_SESSION['message']);
endif;
?>