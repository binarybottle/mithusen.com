 <!-- Modal form element -->

 <div id="modal-form" class="micromodal" aria-hidden="true">
     <div class="fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center bg-[#dc7485]" tabindex="-1">
         <div role="dialog" aria-modal="true" class="max-h-[95vh] absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 w-full md:w-[600px]">
             <img class="border-4 border-yellow-300 relative" src="<?php echo get_template_directory_uri(); ?>/assets/contract_empty.jpg">
             <div class="absolute top-[70%] bottom-[5%] inset-x-[6%]">
                 <form action="/" id="contract-form" class="leading-tight bg-white text-sm md:text-base" method="POST">
                     I, <input name="freemithu_name" type="text" required placeholder="your name" class="border border-black px-1 py-px">, a strong believer in the contractual bond between humans,
                     hereby declare without an attorney or witness that I would be receiving an original (tangible) artwork by Mithu Sen,
                     in exchange for an intangible dialogue between us. This exchange is mutual.<br>
                     "I am not a robot" and I am forced to agree with the above declaration as there is no other option but "I agree"<br>
                     <input name="freemithu_email" type="email" required placeholder="your email" class="border border-black px-1 py-px">
                     <div class="flex justify-end gap-2 mt-2">
                         <button class="bg-black text-white px-4 py-2" type="submit">Enter at your own risk</button>
                         <button type="button" data-micromodal-close class="bg-black text-white px-4 py-2">Close</button>
                     </div>

                 </form>
            </div>
        </div>
    </div>
 </div>