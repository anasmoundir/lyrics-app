<!DOCTYPE html>
<?php
session_start();
if($_SESSION['logged_in'] == false)
{
  header('location:index.php');
}
?>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="assets\style.css">
      <link  href="public/style.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.js" integrity="sha512-J7uKR69aZGGGVlt2wkk/bG6XKOsiRE35PE/vU+aau44g3f5bQqGoW7tKe4LKhVI57etFJOYwy/F/vCYTweELIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
            <title>lyrics application</title>
</head>
<body>

      <div class="container mx-auto">
      <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="assets\logoformypage.png" class="h-6 mr-3 sm:h-9" alt="mylysricslogo" />
                <span class="font-extrabold self-center text-xl font-semibold whitespace-nowrap">My Lyrics Store</span>
            </a>
            <div class="flex md:order-2">
              <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500  hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Search</span>
              </button>
              <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Search icon</span>
                </div>
                <input type="text" onkeyup="myFunction('myInput')" id="myInput" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onkeyup ="search()" placeholder="Search...">
              </div>
              <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
              <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input type="text" onkeyup="myFunction('search-navbar')" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
                <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  <li>
                    <a href="#"  id ="home" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                  </li>
                  <li>
                    <a href="#"  id = "stastics"class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                  </li>
                  <li>
                    <a href="logout.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

  <div class="flex  flex-wrap bg-lime-400	">
    <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5 mb-4">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-3 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> songs </h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $_SESSION['song_numbers'] ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                <i class="fas fa-chart-bar"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
        
        </div>
    </div>
    </div>

    <div class=" mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-4 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">Admins</h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $_SESSION['admin_number'] ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                <i class="fas fa-chart-pie"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
        </div>
    </div>
    </div>

    <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
        <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="text-blueGray-400 uppercase font-bold text-xs">Sales</h5>
            <span class="font-semibold text-xl text-blueGray-700"><?php echo $_SESSION['album_number'] ?></span>
            </div>
            <div class="relative w-auto pl-4 flex-initial">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                <i class="fas fa-users"></i>
            </div>
            </div>
        </div>
        <p class="text-sm text-blueGray-400 mt-4">
        </div>
    </div>
    </div>

</div>
          





          <button class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button" onclick="toggleModal('modal-id')">
           + Add a song button
          </button>
          <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
            <div id="content" class="relative w-auto my-6 mx-auto max-w-3xl">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                    Modal Title
                  </h3>
                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      
                    </span>
                  </button>
                </div>
                <!--body-->
    <div class="relative p-6 flex-auto">
      <div id= "div-duplication">
      
          <form id ="artistfrom">
            <div id ="bunchy">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
           </div>
          <div class="mb-6">
        <label for="song_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Song Name</label>
        <input type="text" name = "song_name" id="song_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
         </div> 
         <div class="mb-6">
        <label for="lyrics" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lyrics</label>
        <textarea   id="lyrics" type="textarea" name ="lyrics_text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  ></textarea>
         </div> 

    <div class="mb-6">
        <label for="artist" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artist Name</label>
        <input  id="artist" name="artist_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
    </div> 


    </div>


    <div class="mb-3">
              <input type="submit" value="Add A song  " name= "add" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id="add-user-btn"  onclick="toggleModal('modal-id')">
    </div>
               </form>
            
               <button id ="duplicate-btn" type = "button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"onclick ="duplicate()">add another song </button> 
      <button class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" type="button" onclick="removeLastAdded()">
      remove  the last added </button>
               </div>
                  <p class="my-4 text-slate-500 text-lg leading-relaxed">
                    I always felt like I could do anything. That???s                           .                          
                  </p>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                  <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    Close
                  </button>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
          <button class=" py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" onclick ="fetchsortedbyname()">
        <div class="flex space-x-2 ">
        <div>    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
</svg>
</div>
         <div> sort songs by name</div>
          </div>    
  </button>
<div class="flex"> 
   <div class="w-full" class="flex flex-col grow">
      <div class="overflow-x-auto w-full sm:-mx-6 lg:-mx-8">
        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
         <div class ="overflow-auto rounded-lg shadow" style="width:100%; overflow-x: scroll;">
         <table id="mytable" class="w-full" >
              <thead class="border-b bg-gray-800">
                <tr>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    ID
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Song Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Lyrics
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                   Album if it is avail
                  </th>
                
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Actions
                   </th>
                </tr>
              </thead class="border-b">
              <tbody>
              </tbody>
            </table>
           
            </div>
        </div>
      </div>
    </div>
</div>



<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id1">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
              <!--content-->
              <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                  <h3 class="text-3xl font-semibold">
                    Modal Title
                  </h3>
                  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                    <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                      
                    </span>
                  </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">

                <form id ="updateforme" >
                        <input  name="id" id="id">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                  </div>
                  <div class="mb-6">
                <label for="song_name1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Song Name</label>
                <input type="text" name = "song_name1" id="song_name1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div> 
            
                <div class="mb-6">
            <label for="lyrics1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lyrics</label>
            <textarea id="lyrics1" name="lyrics_text1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
        </div>

            <div class="mb-6">
                <label for="artist1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artist Name</label>
                <input  id="artist1"  value = "num" name = "artist_name1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div> 

            <div class="flex items-start mb-6">
            
            </div>
            <div class="mb-3">
                      <input type="submit" id="edit-song-btn" value="update and leave" name = "update" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" onclick="toggleModal('modal-id1')">
                    
            </div>
               </form>
                  <p class="my-4 text-slate-500 text-lg leading-relaxed">
                    I always felt like I could do anything. That???s the ad the user just a field to creation
                  </p>
                </div>
                <!--footer-->
             
              </div>
            </div>



   <script src = "main.js"></script>
   <script src="assets\app.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


      </div>
</body>
</html>