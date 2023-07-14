<!-- Dep 1 -->
<div class="modal fade " id="modal-video-depoimento-1" tabindex="-1" data-bs-keyboard="false" role="dialog"
    aria-labelledby="ModalVideo" aria-hidden="true">
    <button type="button" class="btn btn-none border-0 text-light opacity-75 fechar-modal" title="Fechar"
        data-bs-dismiss="modal">
        <i class="fa-solid fa-xmark fa-2x"></i>
    </button>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content rounded-0 bg-transparent">
            <div class="modal-body bg-dark">
                <video id="video-depoimento-1" class="video-js" controls preload="auto" poster-1="" data-setup="{}">
                    <source src="<?php echo e(asset('assets/video/depoimentos/depoimento-1.mp4')); ?>" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                    </p>
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Dep 2 -->
<div class="modal fade " id="modal-video-depoimento-2" tabindex="-1" data-bs-keyboard="false" role="dialog"
    aria-labelledby="ModalVideo" aria-hidden="true">
    <button type="button" class="btn btn-none border-0 text-light opacity-75 fechar-modal" title="Fechar"
        data-bs-dismiss="modal" onclick="dep2.pause();dep2.currentTime(0)">
        <i class="fa-solid fa-xmark fa-2x"></i>
    </button>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content rounded-0 bg-transparent">
            <div class="modal-body bg-dark">
                <video id="video-depoimento-2" class="video-js" controls preload="auto" poster-1="" data-setup="{}">
                    <source src="<?php echo e(asset('assets/video/depoimentos/depoimento-2.mp4')); ?>" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                    </p>
                </video>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp644\www\Indutiva\lp-sistemas\resources\views/_modals_depoimentos.blade.php ENDPATH**/ ?>