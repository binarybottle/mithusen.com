<!-- Modal comments element -->
<div id="modal-comments" class="micromodal" aria-hidden="true">
    <div class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-end bg-black/80" tabindex="-1" data-micromodal-close>
        <div class="h-full lg:h-[80vh] flex flex-col relative w-full mx-2 md:w-10/12 lg:w-[32rem] bg-[#fab8c8] text-lg justify-end" role="dialog" aria-modal="true">
            <div id="scroll_box" class="m-2 grow bg-white overflow-y-auto scrollbar border-black">
                <div id="comment_box" class="p-2 flex flex-col">
                    <?php
                    $args = array(
                        'post_id' => 66,   // Use post_id, not post_ID
                        'order' => 'ASC',
                        //'status' => 'approved'
                    );
                    $comments = get_comments($args);
                    foreach ($comments as $comment) {
                        echo "<div class=\"odd:bg-yellow-100 even:bg-lime-100 mb-1 w-fit min-w-[8rem] max-w-[28rem] odd:self-start even:self-end odd:text-left even:text-right p-2\">
                          <span class=\"leading-none\">" . $comment->comment_content . "</span><br>
                          <span class=\"text-[#df0025] text-sm\" >" . $comment->comment_author . "</span>
                          </div>";
                    }
                    ?>
                </div>
            </div>
            <form id="comments" class="m-2 shrink-0 leading-loose bg-[#fab8c8] text-sm md:text-base">
                <?php wp_nonce_field('freemithu', 'gotcha'); ?>
                <input name="_name" type="text" maxlength="20" placeholder="your name" class="block w-full mb-1 border border-black px-1 py-px">
                <textarea name="_comment" type="textarea" maxlength="120" rows="2" required placeholder="your comment" class="block w-full mb-1 border border-black px-1 py-px resize-none"></textarea>
                <button class="bg-black text-white px-4 py-1 inline-block" type="submit">Submit</button>
                <button class="bg-black text-white px-4 py-1 inline-block" data-micromodal-close>Close</button>
                <div class="text-[#df0025] inline-block px-2 bg-white" id="error_box"></div>
            </form>
        </div>
    </div>
</div>