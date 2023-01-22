<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link  href="public/style.css" rel="stylesheet"/>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

      <title>Document</title>
</head>
<body>
      <section class="h-screen">
            <div class="px-6 h-full text-gray-800">
              <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
              >
                <div
                  class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                  <img
                    src="assets\image.png"
                    class="w-full"
                    alt="Sample image"
                  />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                  <form id ="loginform" >
                    <div class="flex flex-row items-center justify-center lg:justify-start">
                      <p class="text-6xl">Log In</p>
                  
                    </div>
                    <div
                      class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                    >
                      <p class="text-center font-semibold mx-4 mb-0 text-3xl	">Or</p>
                    </div>
          
                    <!-- Email input -->
                    <div class="mb-6">
                      <input
                        type="text"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput1"
                        placeholder="Email address"
                      />
                    </div>
          
                    <!-- Password input -->
                    <div class="mb-6">
                      <input
                        type="password"
                        class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput2"
                        placeholder="Password"
                      />
                    </div>
          
                    <div class="flex justify-between items-center mb-6">
                      <div class="form-group form-check">
                       
                    <div class="text-center lg:text-left">
                      <input
                      id ="submit-btn"
                      value ="login"
                        type="submit"
                        name ="submit-btn"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      >
                        
                     
                     
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <script src = "login.js"></script>
          </section>
</body>
</html>