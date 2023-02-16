<!-- Advance search -->

<section id="" class="p-5 ">
	<div x-data="{selected:'one'}" class="sm:px-14 -mt-16">
		<div  class="">
		  <div class="flex items-center gap-x-1.5 cursor-pointer">
			  <div @click="selected = 'one'" class="bg-gray-100 hover:bg-gray-600 active:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 flex items-center justify-between px-8 py-3 text-sm font-semibold">
				  <span>SEARCH CAR IN DETAILS</span>
			  </div>
			  <div x-on:click="selected = 'two'" class="bg-white hover:bg-gray-100 flex items-center justify-between px-8 py-3 text-sm font-semibold">
				  <span>SEARCH CAR BY TYPE</span>
			  </div>
		  </div>
		  <div class="bg-white">
			  <div x-show="selected == 'one'" class="py-6 px-4">
				<div class="px-6 pb-4">
					<div class="grid grid-cols-12 gap-3">
						<div class="lg:col-span-3 col-span-12">
							<label for="first-name" class="block text-sm font-medium text-black py-2">Keyword</label>
							<input type="text" name="Keyword" id="Keyword" placeholder="Eg Honda Civic , Audi , Ford." class="mt-1 pl-2 block w-full py-3.5 border border-gray-300 shadow-sm sm:text-sm focus:border-black focus:outline-none">
						</div>
						<div class="lg:col-span-3 col-span-12">
							<label for="country" class="block text-sm font-medium py-2">Select Make</label>
							<select class="js-example-basic-single w-full m-5 border border-gray-300 shadow-sm sm:text-sm focus:border-black focus:outline-none">
							  <option class="bg-white hover:bg-red-500">Alabama</option>
								...
							  <option class="bg-white hover:bg-red-500" >Wyoming</option>
							  <option >Wyoming</option>
							  <option >Wyoming</option>
							</select> 
						</div>
						<div class="lg:col-span-3 col-span-12">
							<label for="country" class="block text-sm font-medium py-2">Select Make</label>
							<select id="" name="" placeholder="Eg Honda Civic , Audi , Ford." class="mt-1 pl-2 block w-full py-3.5 border border-gray-300 shadow-sm sm:text-sm focus:border-black focus:outline-none">
							  <option class="border border-red-500">ff</option>
							  <option class="bg-white text-reed-500">United States</option>
							  <option>Canada</option>
							  <option>Mexico</option>
							</select>
						</div>
					</div>
				</div>
			  </div>
			  <div x-show="selected == 'two'" class="py-6">
				<div class="pb-4 px-8">
					<div class="grid grid-cols-12">
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/1.png" alt="project01">
								<span>Convertible</span>
							</a>
						</div>
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/2.png" alt="project01">
								<span>Coupe</span>
							</a>
						</div>
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/3.png" alt="project01">
								<span>Sedan</span>
							</a>
						</div>
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/4.png" alt="project01">
								<span>Van/Minivan</span>
							</a>
						</div>
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/5.png" alt="project01">
								<span>Truck</span>
							</a>
						</div>
						<div class="text-center col-span-4 lg:col-span-2 sm:col-span-3 ">
							<a href="#" class="font-semibold">
								<img class="" src="images/demo/car-body/6.png" alt="project01">
								<span>Hybrid</span>
							</a>
						</div>
					</div>
				</div>
			  </div>
		  </div>
		</div>
	</div>

</section>
