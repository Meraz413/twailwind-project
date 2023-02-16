
    <nav aria-label="Top" class="bg-black text-white mx-auto max-w-8xl px-4 sm:px-6 lg:px-8">
      <div class="px-12">
        <div class="flex h-10 items-center">
          <div class="lg:pl-8 hidden md:block">
            <ul class="flex space-x-5">
				<li class="">
					<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
					<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/></svg>
					<span class="px-1">About</span>
					</a>
				</li>
				<li class="">
					<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
					<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M572.6 270.3l-96 192C471.2 473.2 460.1 480 447.1 480H64c-35.35 0-64-28.66-64-64V96c0-35.34 28.65-64 64-64h117.5c16.97 0 33.25 6.742 45.26 18.75L275.9 96H416c35.35 0 64 28.66 64 64v32h-48V160c0-8.824-7.178-16-16-16H256L192.8 84.69C189.8 81.66 185.8 80 181.5 80H64C55.18 80 48 87.18 48 96v288l71.16-142.3C124.6 230.8 135.7 224 147.8 224h396.2C567.7 224 583.2 249 572.6 270.3z"/></svg>
					<span class="px-1.5">FAQS</span>
					</a>
				</li>
				<li class="">
					<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
					<div class="flex justify-center">
					
					<div
						x-data="{
							open: false,
							toggle() {
								if (this.open) {
									return this.close()
								}
								this.$refs.button.focus()
								this.open = true
							},
							close(focusAfter) {
								if (! this.open) return

								this.open = false

								focusAfter && focusAfter.focus()
							}
						}"
						x-on:keydown.escape.prevent.stop="close($refs.button)"
						x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
						x-id="['dropdown-button']"
						class="relative"
					>
						<!-- Button -->
						<button
							x-ref="button"
							x-on:click="toggle()"
							:aria-expanded="open"
							:aria-controls="$id('dropdown-button')"
							type="button"
							class="flex items-center gap-2 shadow"
						>
							<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9h2.3c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM144.5 348.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z"/></svg>
							Language
							<!-- Heroicon: chevron-down -->
							<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
						</button>
						<!-- Panel -->
						<div
							x-ref="panel"
							x-show="open"
							x-transition.origin.top.left
							x-on:click.outside="close($refs.button)"
							:id="$id('dropdown-button')"
							style="display: none;"
							class="absolute left-0 mt-2.5 w-40 bg-white shadow-md border-t-2 border-red-500"
						>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								ENGLISH
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								SWEDISH
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								ARABIC
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								RUSSAIN
							</a>
							<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
								CHINESE
							</a>
						</div>
					</div>
					</div>
					</a>
				</li>
            </ul>
          </div>
		  
			<div class="ml-auto flex items-end">
			  <div class="md:pr-2">
				<ul class="flex space-x-5">
					<li class="">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 96h64c17.7 0 32 14.3 32 32V384c0 17.7-14.3 32-32 32H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h64c53 0 96-43 96-96V128c0-53-43-96-96-96H352c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-7.5 177.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H160v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
						<span class="px-1">Log In</span>
						</a>
					</li>
					<li class="hidden lg:block">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"fill="currentColor" stroke="currentColor" aria-hidden="true"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 144c0-44.2 35.8-80 80-80s80 35.8 80 80v48c0 17.7 14.3 32 32 32s32-14.3 32-32V144C576 64.5 511.5 0 432 0S288 64.5 288 144v48H64c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H352V144z"/></svg>
						<span class="px-1.5">Register</span>
						</a>
					</li>
					<li class="">
						<a href="#" class="flex items-center text-sm hover:text-red-800 duration-700">
						<div class="flex justify-center">
						
						<div
							x-data="{
								open: false,
								toggle() {
									if (this.open) {
										return this.close()
									}
									this.$refs.button.focus()
									this.open = true
								},
								close(focusAfter) {
									if (! this.open) return

									this.open = false

									focusAfter && focusAfter.focus()
								}
							}"
							x-on:keydown.escape.prevent.stop="close($refs.button)"
							x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
							x-id="['dropdown-button']"
							class="relative"
						>
							<!-- Button -->
							<button
								x-ref="button"
								x-on:click="toggle()"
								:aria-expanded="open"
								:aria-controls="$id('dropdown-button')"
								type="button"
								class="flex items-center gap-2 shadow"
							>
								<img src="images/demo/3.jpg" alt="" class="block h-auto w-6 flex-shrink-0 rounded-full">
								Umair
								<!-- Heroicon: chevron-down -->
								<svg xmlns="http://www.w3.org/2000/svg"  class="h-3 w-3" viewBox="0 0 320 512" fill="currentColor"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
							</button>
							<!-- Panel -->
							<div
								x-ref="panel"
								x-show="open"
								x-transition.origin.top.left
								x-on:click.outside="close($refs.button)"
								:id="$id('dropdown-button')"
								style="display: none;"
								class="absolute left-0 mt-2.5 w-40 bg-white shadow-md border-t-2 border-red-500"
							>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-5 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									USER PROFILE
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ARCHIVES
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ACTIVE ADS
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									FAVOURITE ADS
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									MESSAGE PANEL
								</a>
								<a href="#" class="flex items-center gap-2 w-full px-5 py-4 text-left text-sm font-medium text-black hover:text-red-500 disabled:text-gray-500 border-b">
									ACCOUNT DEACTIVATION
								</a>
							</div>
						</div>
						</div>
						</a>
					</li>
				</ul>
			  </div>
			</div>	
			<button class="py-2.5 px-5 bg-red-600 hover:bg-red-700 duration-700 text-sm font-medium">
				SELL YOR CAR
			</button>
		</div>
      </div>
    </nav>
	