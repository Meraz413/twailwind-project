<div class="relative bg-white text-sm" x-data="Components.popover({ open: true, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
  <div class="mx-auto max-w-7xl px-4 px-2 sm:px-8 lg:px-20">
    <div class="flex items-center justify-between border-b-2 border-gray-100 py-5 md:justify-start md:space-x-10">
      <div class="flex flex-shrink-0 justify-start">
        <a href="#">
          <span class="sr-only">Your Company</span>
          <img class="h-9 w-auto" src="images/demo/logo.webp" alt="">
        </a>
      </div>
    
	  <nav class="hidden space-x-2 md:flex sm:items-stretch sm:justify-start">
	    <div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center group bg-rose-300 text-white hover:bg-rose-100 hover:text-rose-500 px-4 py-2 rounded-full text-base font-medium duration-200" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
            Home
            <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-1 h-4 w-4 group-hover:fill-rose-500 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>

          
          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-3 w-52 max-w-md px-2 sm:px-0" x-ref="panel" @click.away="open = false" style="display: none;">
            <div class="overflow-hidden rounded shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid gap-6 font-medium bg-white px-5 py-6 sm:gap-4 sm:p-6">
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 1</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 2</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 3</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 4</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 5</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Sample 6</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="text-base font-medium hover:text-rose-500">Home Sample 7</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Home Multi-Vendor</p>
                </a>

			  </div>
            </div>
          </div>
        </div>
		
	    <div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center group hover:bg-rose-100 hover:text-rose-500 px-4 py-2 rounded-full text-base font-medium duration-200" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
            Listing
            <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-1 h-4 w-4 group-hover:fill-rose-500 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>

          
          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-3 w-52 max-w-md px-2 sm:px-0" x-ref="panel" @click.away="open = false" style="display: none;">
            <div class="overflow-hidden rounded shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid gap-6 font-medium bg-white px-5 py-6 sm:gap-4 sm:p-6">
				<a href="#" class="flex group">
					<p href="" class="w-5/6 group-hover:text-rose-500 ">List Layout</p>
					<svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" fill="#ccc" class="w-1/6 mt-1.5 group-hover:fill-rose-300 group-hover:translate-x-1.5 duration-200" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
				</a>
				<a href="#" class="flex group">
					<p href="" class="w-5/6 group-hover:text-rose-500 ">Grid Layout</p>
					<svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" fill="#ccc" class="w-1/6 mt-1.5 group-hover:fill-rose-300 group-hover:translate-x-1.5 duration-200" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
				</a>
				<a href="#" class="flex group">
					<p href="" class="w-5/6 group-hover:text-rose-500 ">Half Screen Map</p>
					<svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" fill="#ccc" class="w-1/6 mt-1.5 group-hover:fill-rose-300 group-hover:translate-x-1.5 duration-200" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
				</a>
				<a href="#" class="flex group">
					<p href="" class="w-5/6 group-hover:text-rose-500 ">Multi-Vendor</p>
					<svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" fill="#ccc" class="w-1/6 mt-1.5 group-hover:fill-rose-300 group-hover:translate-x-1.5 duration-200" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
				</a>
				<a href="#" class="flex group">
					<p href="" class="w-5/6 group-hover:text-rose-500 ">Bookings</p>
					<svg xmlns="http://www.w3.org/2000/svg" height="13" width="13" fill="#ccc" class="w-1/6 mt-1.5 group-hover:fill-rose-300 group-hover:translate-x-1.5 duration-200" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
				</a>
			  </div>
            </div>
          </div>
        </div>
		
	    <div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center text-base group hover:bg-rose-100 hover:text-rose-500 px-4 py-2 rounded-full font-medium duration-200" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
            User Panel
            <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-1 h-4 w-4 group-hover:fill-rose-500 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>

          
          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-3 w-52 max-w-md px-2 sm:px-0" x-ref="panel" @click.away="open = false" style="display: none;">
            <div class="overflow-hidden rounded shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid gap-6 font-medium bg-white px-5 py-6 sm:gap-4 sm:p-6">
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Dashboard</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">My Bookings</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Messages</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Bookings</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Wallet</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">My Listing</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Reviews</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Bookmarks</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">Add Listing</p>
                </a>
                <a href="#" class="flex items-start">
                    <p class="hover:text-rose-500">My Profile</p>
                </a>
			  </div>
            </div>
          </div>
        </div>
		
	    
		
		<div class="relative" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="inline-flex items-center group hover:bg-rose-100 hover:text-rose-500 px-4 py-2 rounded-full text-base font-medium duration-200" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
            Pages
            <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-1 h-4 w-4 group-hover:fill-rose-500 duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>

          
          <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-3 w-screen max-w-xl transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2" x-ref="panel" @click.away="open = false" style="display: none;">
            <div class="overflow-hidden rounded shadow-lg ring-1 ring-black ring-opacity-5">
              <div class="relative grid grid-cols-12 gap-6 bg-white px-5 py-6 sm:gap-6 sm:p-8">
			  
                <div class="col-span-4 items-start rounded border-r">
                  <p class="font-bold mb-4">Pages</p>
                  <ul class="space-y-3">
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
							</svg>
							User Profile
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
							</svg>
							Blog
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
							</svg>
							Single Post
						</a>
					</li>
                  </ul>
                </div>

                <div class="col-span-4 items-start rounded border-r">
                  <p class="font-bold mb-4">More Pages</p>
                  <ul class="space-y-3">
                    <li class="group">
						<a href="" class="flex text-sm group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"   	stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
							</svg>
							Contact
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							Claim Listing
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mt-0.5 mr-1.5 group-hover:fill-rose-500 duration-200" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M360 0C373.3 0 384 10.75 384 24C384 37.25 373.3 48 360 48H352V66.98C352 107.3 335.1 145.1 307.5 174.5L225.9 256L307.5 337.5C335.1 366 352 404.7 352 445V464H360C373.3 464 384 474.7 384 488C384 501.3 373.3 512 360 512H24C10.75 512 0 501.3 0 488C0 474.7 10.75 464 24 464H32V445C32 404.7 48.01 366 76.52 337.5L158.1 256L76.52 174.5C48.01 145.1 32 107.3 32 66.98V48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0L360 0zM192 289.9L110.5 371.5C90.96 390.1 80 417.4 80 445V464H304V445C304 417.4 293 390.1 273.5 371.5L192 289.9zM192 222.1L273.5 140.5C293 121 304 94.56 304 66.98V47.1H80V66.98C80 94.56 90.96 121 110.5 140.5L192 222.1z"/></svg>
							Coming Soon
						</a>
					</li>
                  </ul>
                </div>

                <div class="col-span-4 items-start rounded">
                  <p class="font-bold mb-4">Other</p>
                  <ul class="space-y-3">
                    <li class="group">
						<a href="" class="flex text-sm group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							404 Page
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
							</svg>
							Pricing Tables
						</a>
					</li>
                    <li class="group">
						<a href="" class="flex group-hover:text-rose-500 duration-200">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-0.5 mr-1.5 group-hover:stroke-rose-500 duration-200">
							<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
							</svg>
							Typography
						</a>
					</li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
	  </nav>
      <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
		
		<div class="relative group" x-data="{ open: false, focus: false }" @keydown.escape="onEscape">
			<button type="button" class="rounded-full text-blue-700 bg-slate-100 p-3 text-gray-400 group-hover:bg-rose-100 duration-200 mr-5" @click="open =! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
			  <!-- Heroicon name: outline/bell -->
			  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:stroke-rose-500 duration-200">
			  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
			  </svg>
			  <span class="inline-flex justify-center align-center absolute text-white bg-rose-500 h-5 w-5 -mt-1 right-3 rounded-full top-0">0</span>
			</button>
			<div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 mt-3 w-64 transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2" x-ref="panel" @click.away="open = false" style="display: none;">
				<div class="overflow-hidden rounded shadow-lg">
					<div class="relative bg-white px-5 py-6 sm:p-7">
						<p class="text-center">No products in the cart.</p>
					</div>
				</div>
			</div>
		</div>
		
        <button>
			<div class="group ">
				<a href="#" class="flex bg-slate-100 group-hover:bg-rose-500 group-hover:text-white px-4 py-2 rounded-full text-base font-medium duration-200" aria-current="page">
					<svg xmlns="http://www.w3.org/2000/svg" height="18" fill="#444" class="mt-0.5 mr-1.5 group-hover:fill-white duration-200" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
					Sign In
				</a>
			</div>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
    <div class="-my-2 -mr-2 md:hidden " x-data="{offcanvas:false}">
        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="offcanvas =! offcanvas">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/bars-3 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
		  <div x-show="offcanvas" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden" x-ref="panel" @click.away="offcanvas = false" style="display: none;">
			<div class="rounded-lg bg-black shadow-lg ring-1 ring-black ring-opacity-5">
			  
			  <div class="flex items-center justify-between px-8 py-5">
			    <div>
				  <img class="h-8 w-auto" src="images/demo/logo2.webp" alt="Your Company">
			    </div>
			    <div class="-mr-2">
				  <button type="button" class="inline-flex items-center justify-center rounded-md bg-zinc-700 p-2 text-white" @click="offcanvas = false">
				    <span class="sr-only">Close menu</span>
				    <!-- Heroicon name: outline/x-mark -->
				    <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				    </svg>
				  </button>
			    </div>
			  </div>
			  <div class="px-8 pt-5 pb-6 bg-zinc-900">
				<div class="mt-6 ">
				  <nav class="grid gap-y-8 ">
					<a href="#" class="flex">
						<p href="" class="w-5/6 font-bold text-gray-300">Home</p>
						<svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#ccc" class="w-1/6 mt-1.5" viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
					</a>
					<a href="#" class="flex ">
						<p href="" class="w-5/6 font-bold text-gray-300">Listing</p>
						<svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#ccc" class="w-1/6 mt-1.5 " viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
					</a>
					<a href="#" class="flex ">
						<p href="" class="w-5/6 font-bold text-gray-300">User Panel</p>
						<svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#ccc" class="w-1/6 mt-1.5 " viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
					</a>
					<a href="#" class="flex ">
						<p href="" class="w-5/6 font-bold text-gray-300">pages</p>
						<svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#ccc" class="w-1/6 mt-1.5 " viewBox="0 0 256 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"/></svg>
					</a>

				  </nav> 
				  
				  <hr class="mt-12 w-11/12 p-1">
				  
				  <div class="">
					  <p class="text-xl text-white font-semibold pb-5 pt-8">Our Office </p>
					  <ul class="space-y-2">
						  <li class="leading-relaxed w-10/12">12345 Little Lonsdale St, Melbourne</li>
						  <li>Phone: (123) 123-456</li>
						  <li>E-Mail:<a href="" class="text-rose-500 font-medium"> office@example.co  </a></li>
					  </ul>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

      </div>
</div>