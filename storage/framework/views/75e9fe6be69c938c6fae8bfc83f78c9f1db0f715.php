<?php $__env->startSection('title', 'LP Sistema Indutiva'); ?>
<?php $__env->startSection('head'); ?>
    <!-- Glide Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/glide-3.6.0/dist/css/glide.core.min.css')); ?>">
    <!-- Glide Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/glide-3.6.0/dist/css/glide.theme.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Se você usa plan... -->
        <section>
            <div class="container text-dark mt-lg-5 mb-5 py-4 secao-vantagens">
                <div class="row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-9 text-center">
                        <h2 class="h2 fw-700 pb-2">
                            <?php echo e(__('texts.se_voce_usa_planilhas_do_excel_ou_papeis_e_caneta_para_gerenciar_sua_empresa_voce_precisa_de_um')); ?>

                            <span class="d-inline d-lg-inline-block position-relative" id="annotate-sistema-pers">
                                <?php echo e(__('texts.sistema_personalizado')); ?>

                            </span>
                        </h2>
                        <div
                            class="bg-blue-light px-3 py-1 fw-500 fs-4 d-inline-block text-blue rounded mt-4 text-vantagens">
                            <?php echo e(__('texts.vantagens_de_ter_um_sistema')); ?>

                        </div>
                    </div>
                    <!-- Cards -->
                    <div class="col-12 col-lg-10 mt-4 pt-2">
                        <div class="row gy-4">
                            <!-- Reduza custos -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img src="<?php echo e(asset('assets/icons/dollar-sign.svg')); ?>" alt="Reduza custos"
                                                width="50" class="m-1 icon-card-vantagens">
                                            <img src="<?php echo e(asset('assets/icons/dollar-sign-dark.svg')); ?>"
                                                alt="Reduza custos ícone" width="50"
                                                class="m-1 icon-card-vantagens-dark">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600">
                                            <?php echo e(__('texts.reduza_custos')); ?>

                                        </h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.um_sistema_personalizado_pode_apresentar_as_falhas_no_financeiro_do_seu_negocio_como_operacoes_deficitarias')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Poupe tempo -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img class="m-1 icon-card-vantagens"
                                                src="<?php echo e(asset('assets/icons/coffee.svg')); ?>" alt="Poupe tempo"
                                                width="50">
                                            <img class="m-1 icon-card-vantagens-dark"
                                                src="<?php echo e(asset('assets/icons/coffee-dark.svg')); ?>" alt="Poupe tempo Ícone"
                                                width="50">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600"><?php echo e(__('texts.poupe_tempo')); ?></h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.nao_perca_mais_tempo_escrevendo_relatorios_ou_fazendo_calculos_o_sistema_faz_isso_automaticamente')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Otimize vendas -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img src="<?php echo e(asset('assets/icons/trending-up.svg')); ?>" alt="Otimize vendas"
                                                width="50" class="m-1 icon-card-vantagens">
                                            <img src="<?php echo e(asset('assets/icons/trending-up-dark.svg')); ?>"
                                                alt="Otimize vendas ícone" width="50"
                                                class="m-1 icon-card-vantagens-dark">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600"><?php echo e(__('texts.otimize_vendas')); ?></h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.o_sistema_pode_identificar_de_forma_sistematica_o_desempenho_de_vendedores_e_campanhas_publicitarias')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Controle recursos -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img src="<?php echo e(asset('assets/icons/archive.svg')); ?>" alt="Controle recursos"
                                                width="50" class="m-1 icon-card-vantagens">
                                            <img src="<?php echo e(asset('assets/icons/archive-dark.svg')); ?>"
                                                alt="Controle recursos ícone" width="50"
                                                class="m-1 icon-card-vantagens-dark">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600"><?php echo e(__('texts.controle_recursos')); ?></h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.utilize_o_sistema_para_fiscalizar_com_precisao_os_recursos_do_seu_negocio_do_dinheiro_ao_estoque')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Histórico salvo -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img src="<?php echo e(asset('assets/icons/calendar.svg')); ?>" alt="Histórico salvo"
                                                width="50" class="m-1 icon-card-vantagens">
                                            <img src="<?php echo e(asset('assets/icons/calendar-dark.svg')); ?>"
                                                alt="Histórico salvo ícone" width="50"
                                                class="m-1 icon-card-vantagens-dark">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600"><?php echo e(__('texts.historico_salvo')); ?></h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.nao_sabe_se_seu_negocio_melhorou_o_desempenho_depois_daquele_investimento_o_sistema_permite_comparar')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Visão macro -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card border-0 rounded-4 card-vantagens h-100">
                                    <div class="card-body">
                                        <div class="rounded-4 bg-blue-light bg-blue-light-2 text-blue p-2 d-inline-block">
                                            <img src="<?php echo e(asset('assets/icons/eye.svg')); ?>" alt="Visão macro" width="50"
                                                class="m-1 icon-card-vantagens">
                                            <img src="<?php echo e(asset('assets/icons/eye-dark.svg')); ?>" alt="Visão macro ícone"
                                                width="50" class="m-1 icon-card-vantagens-dark">
                                        </div>
                                        <h3 class="card-title h4 mt-3 fw-600"><?php echo e(__('texts.visao_macro')); ?></h3>
                                        <p class="card-text text-gray">
                                            <?php echo e(__('texts.tenha_literalmente_os_olhos_em_cada_processo_da_sua_empresa_nao_deixe_mais_dinheiro_na_mesa')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 pt-3">
                        <a href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank"
                            class="btn btn-primary btn-lg fs-5 fw-500 border-0 btn-primary-custom px-4" role="button">
                            <?php echo e(__('texts.quero_um_sistema')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solucionamos problemas... -->
        <section>
            <div class="container text-dark my-lg-5 pb-4 py-lg-5">
                <div class="row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h2 class="h2 fw-700 pb-2">
                            <?php echo e(__('texts.solucionamos_problemas_de_dezenas_de_empresas')); ?>

                            <span class="d-inline-block position-relative" id="anot-todos-meses">
                                <?php echo e(__('texts.todos_os_meses')); ?>

                            </span>
                        </h2>
                    </div>
                    <!-- Cards -->
                    <div class="col-12 col-lg-12 mt-4 pt-2">
                        <div class="row gy-3 gx-3 position-relative overflow-hidden">
                            <div class="sombra-esquerda d-none d-md-block"></div>
                            <div class="sombra-direira d-none d-md-block"></div>
                            <!-- Linha 2 -->
                            <div class="col-12 position-relative col-soluciona-2 ">
                                <div class="d-flex gap-3 flex-soluciona-2" id="flex-soluciona-2">
                                    <?php $__currentLoopData = [3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/2.svg')); ?>"
                                                    class="logo-cliente-bg-dark w-100 rounded-3"
                                                    alt="Drogaria Nossa Rede">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/3.svg')); ?>"
                                                    class="w-100 logo-dark" alt="LR">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/4.svg')); ?>" class="w-100"
                                                    alt="City Pro">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/5.svg')); ?>"
                                                    class="w-100 logo-dark" alt="AstroDelivery">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/6.svg')); ?>"
                                                    class="w-100 logo-dark" alt="Rodrigues Contabilidade">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/7.svg')); ?>"
                                                    class="w-75 mx-auto rounded-3" alt="Assessoria Contábil">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/9.svg')); ?>"
                                                    class="w-100 rounded-3" alt="Carência Menstrual">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/10.svg')); ?>"
                                                    class="w-100 logo-dark" alt="United Installer">
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <!-- Linha 1 -->
                            <div class="col-12 position-relative col-soluciona-1">
                                <div class="d-flex gap-3 flex-soluciona-1" id="flex-soluciona-1">
                                    <?php $__currentLoopData = [3, 3, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/2.svg')); ?>"
                                                    class="logo-cliente-bg-dark w-100 rounded-3"
                                                    alt="Drogaria Nossa Rede">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/3.svg')); ?>"
                                                    class="w-100 logo-dark" alt="LR">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/4.svg')); ?>" class="w-100"
                                                    alt="City Pro">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/5.svg')); ?>"
                                                    class="w-100 logo-dark" alt="AstroDelivery">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/6.svg')); ?>"
                                                    class="w-100 logo-dark" alt="Rodrigues Contabilidade">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/7.svg')); ?>"
                                                    class="w-75 mx-auto rounded-3" alt="Assessoria Contábil">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/9.svg')); ?>"
                                                    class="w-100 rounded-3" alt="Carência Menstrual">
                                            </div>
                                        </div>
                                        <div class="card border-0 rounded-3 overflow-hidden card-soluciona">
                                            <div class="card-body p-0 d-flex p-3 px-4 align-items-center">
                                                <img src="<?php echo e(asset('assets/images/logos/10.svg')); ?>"
                                                    class="w-100 logo-dark" alt="United Installer">
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Como os sistemas... -->
        <section id="depoimentos">
            <div class="container text-dark my-3 my-lg-5 py-5 px-0 px-lg-3">
                <div class="row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h2 class="h2 fw-700">
                            <?php echo e(__('texts.como_os_sistemas')); ?>

                            <span class=" position-relative" id="anot-personali">
                                <?php echo e(__('texts.personalizados')); ?>

                            </span>
                            <span class="d-inline-block position-relative" id="anot-impact">
                                <?php echo e(__('texts.impactaram')); ?>

                            </span>
                            <?php echo e(__('texts.a_empresa_dos_nossos_clientes')); ?>

                        </h2>
                        <p class="text-gray fs-4 fw-500">
                            <?php echo e(__('texts.assista_aos_depoimentos_exclusivos_e_descubra')); ?>

                        </p>
                    </div>
                    <!-- Cards -->
                    <div class="col-12 col-lg-12 mt-2 mt-lg-2 pt-0 pt-lg-2">
                        <div class="row gy-3 gx-3 position-relative">

                            <div class="col-12 col-12-depoimentos">
                                <div class="sombra-esquerda d-none d-md-block"></div>
                                <div class="sombra-direira d-none d-md-block"></div>
                                <!-- Carousel -->
                                <div class="glide mb-5">
                                    <div class="glide__track" data-glide-el="track">
                                        <ul class="glide__slides ">
                                            <!-- Depoimento 1 -->
                                            <li class="glide__slide ">
                                                <div class="card border-0 card-videos-carousel item p-1">
                                                    <div class="p-2">
                                                        <div class="position-relative">
                                                            <img src="<?php echo e(asset('assets/images/depoimentos/dep-1.svg')); ?>"
                                                                alt="Depoimento 1"
                                                                class="rounded-3 w-100 previa-img-video" width="300"
                                                                height="100" style="height: auto !important">
                                                            <button type="button"
                                                                class="btn btn-none p-0 border-0  icon-click-videos"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal-video-depoimento-1"
                                                                onclick="dep1.play()">
                                                                <img src="<?php echo e(asset('assets/icons/play-circle-white.svg')); ?>"
                                                                    alt="Play Depoimento 1">
                                                                <span class="visually-hidden">Play</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-1">
                                                        <h3 class="h4 card-title fw-600 h5 text-truncate">
                                                            Gabriel
                                                        </h3>
                                                        <p class="card-text text-gray fs-13px lh-sm">
                                                            <?php echo e(__('texts.bem_ola_a_todos_meu_nome_e_gabriel')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Depoimento 2 -->
                                            <li class="glide__slide ">
                                                <div class="card border-0 card-videos-carousel item p-1">
                                                    <div class="p-2">
                                                        <div class="position-relative">
                                                            <img src="<?php echo e(asset('assets/images/depoimentos/dep-2.svg')); ?>"
                                                                alt="Depoimento 2"
                                                                class="rounded-3 w-100 previa-img-video" width="300">
                                                            <button type="button"
                                                                class="btn btn-none p-0 border-0  icon-click-videos"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modal-video-depoimento-2"
                                                                onclick="dep2.play()">
                                                                <img src="<?php echo e(asset('assets/icons/play-circle-white.svg')); ?>"
                                                                    alt="Play Depoimento 2">
                                                                <span class="visually-hidden">Play</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-1">
                                                        <h3 class="h4 card-title fw-600 h5 text-truncate">
                                                            Ana Paula
                                                        </h3>
                                                        <p class="card-text text-gray fs-13px lh-sm">
                                                            <?php echo e(__('texts.ola_meu_nome_e_ana_paula_sou_uma')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left p-0 border-0 shadow-none"
                                            data-glide-dir="<">
                                            <img src="<?php echo e(asset('assets/icons/arrow-left-circle.svg')); ?>" class="arrow-lg"
                                                alt="Anterior" width="70">
                                            <img src="<?php echo e(asset('assets/icons/arrow-left-circle-blue.svg')); ?>"
                                                class="arrow-sm" alt="Anterior" width="60">
                                        </button>
                                        <button class="glide__arrow glide__arrow--right p-0 border-0 shadow-none"
                                            data-glide-dir=">">
                                            <img src="<?php echo e(asset('assets/icons/arrow-right-circle.svg')); ?>"
                                                class="arrow-lg" alt="Próximo" width="70">
                                            <img src="<?php echo e(asset('assets/icons/arrow-right-circle-blue.svg')); ?>"
                                                class="arrow-sm" alt="Próximo" width="60">
                                        </button>
                                    </div>

                                    <div class="glide__bullets " data-glide-el="controls[nav]">
                                        <button class="glide__bullet" data-glide-dir="=0" title="Exibir"></button>
                                        <button class="glide__bullet" data-glide-dir="=1" title="Exibir"></button>
                                        <button class="glide__bullet" data-glide-dir="=2" title="Exibir"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-5 pt-lg-4 mt-4 mt-lg-2">
                        <a class="btn btn-primary btn-lg fs-5 fw-500 border-0 btn-primary-custom px-4"
                            href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank" role="button">
                            <?php echo e(__('texts.quero_um_sistema')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php echo $__env->make('_modals_depoimentos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Letreiros -->
    <div class="py-5 py-lg-0">
        <div class="letreiro-laranja fw-600 text-white fs-4" id="letreiro-laranja">
            <div class="marquee">
                <span class="text " id="text-laranja-letreiro">
                    <?php for($i = 0; $i < 60; $i++): ?>
                        <?php echo e(__('texts.sistemas_personalizados')); ?> •
                    <?php endfor; ?>
                </span>
            </div>
        </div>
        <div class="letreiro-blue fw-600 text-white fs-4" id="letreiro-azul">
            <div class="marquee">
                <span class="text" id="text-azul-letreiro">
                    <?php for($i = 0; $i < 60; $i++): ?>
                        <?php echo e(__('texts.aumente_o_desempenho_da_sua_empresa')); ?> •
                    <?php endfor; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Alguns dos sistemas que entregamos -->
        <section>
            <div class="container text-dark my-lg-5 py-3 py-lg-5 px-0 px-lg-3 alguns-dos-sistemas">
                <div class="row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h2 class="h2 fw-700 pt-5 pb-3">
                            <?php echo e(__('texts.alguns_dos_sistemas_que')); ?>

                            <span class="d-inline-block position-relative" id="anot-entrega">
                                <?php echo e(__('texts.entregamos')); ?>

                            </span>
                        </h2>
                    </div>
                    <!-- Cards -->
                    <div class="col-12 col-lg-12 mt-2 mt-lg-2 pt-2">
                        <div class="row gy-3 gx-3 position-relative">
                            <div class="col-12 col-12-alguns-sistemas">
                                <!-- Carousel -->
                                <div class="sombra-esquerda d-none d-md-block"></div>
                                <div class="sombra-direira d-none d-md-block"></div>

                                <div class="glide glide-2 mb-5">
                                    <div class="glide__track" data-glide-el="track">
                                        <ul class="glide__slides ">
                                            <!-- Sistema 1 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-ticket.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-ticket-1.svg')); ?>"
                                                                    alt="Sistema de Tickets para Empresas"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.sistema_de_tickets_para_empresas')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 2 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-adot-pet.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-adot-pet-1.svg')); ?>"
                                                                    alt="Adoção de Animais"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.adocao_de_animais')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 3 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-flps.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-flps-1.svg')); ?>"
                                                                    alt="Controle de Pagamentos"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4  card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.controle_de_aluguel_de_placas_de_energia_solar')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 4 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-orgev.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-orgev-1.svg')); ?>"
                                                                    alt="Organização de Eventos"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class=" h4  card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.organizacao_de_eventos')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 5 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-mf.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-mf-1.svg')); ?>"
                                                                    alt="Monta Festa"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4  card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.monta_festa')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 6 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-hunger-no-more.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-hunger-no-more-1.svg')); ?>"
                                                                    alt="Hunger no More"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.hunger_no_more')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 7 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-fila-at.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-fila-at-1.svg')); ?>"
                                                                    alt="Fila de Atendimento"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.fila_de_atendimento')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- Sistema 8 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-farmacia.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-farmacia-1.svg')); ?>"
                                                                    alt="Sistema para Farmácia"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.sistema_para_farmacia')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Sistema 9 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-diario-escolar.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-diario-escolar-1.svg')); ?>"
                                                                    alt="Diário Escolar"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.diario_escolar')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Sistema 10 -->
                                            <li class="glide__slide">
                                                <div class="card border-0 card-videos-carousel item h-100 p-1">
                                                    <div class="p-2 pb-2">
                                                        <div class="position-relative">
                                                            <a href="#" class="" data-bs-toggle="modal"
                                                                data-bs-target="#modal-sistema"
                                                                onclick="document.getElementById('img-sistema').src=`<?php echo e(asset('assets/images/sistemas/sistema-biblioteca.png')); ?>`;">
                                                                <img src="<?php echo e(asset('assets/images/sistemas/svg/sistema-biblioteca-1.svg')); ?>"
                                                                    alt="Sistema para Biblioteca"
                                                                    class="rounded-4 w-100 previa-img-video">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-2 pt-0 mt-0 pb-1">
                                                        <h3
                                                            class="h4 card-title fw-600 fs-5 text-truncate pt-0  mt-0 pb-0 mb-1">
                                                            <?php echo e(__('texts.sistema_para_biblioteca')); ?>

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left p-0 border-0 shadow-none"
                                            data-glide-dir="<">
                                            <img src="<?php echo e(asset('assets/icons/arrow-left-circle.svg')); ?>" class="arrow-lg"
                                                alt="Anterior" width="70">
                                            <img src="<?php echo e(asset('assets/icons/arrow-left-circle-blue.svg')); ?>"
                                                class="arrow-sm" alt="Anterior" width="60">
                                        </button>
                                        <button class="glide__arrow glide__arrow--right p-0 border-0 shadow-none"
                                            data-glide-dir=">">
                                            <img src="<?php echo e(asset('assets/icons/arrow-right-circle.svg')); ?>"
                                                class="arrow-lg" alt="Próximo" width="70">
                                            <img src="<?php echo e(asset('assets/icons/arrow-right-circle-blue.svg')); ?>"
                                                class="arrow-sm" alt="Próximo" width="60">
                                        </button>
                                    </div>
                                    <div class="glide__bullets " data-glide-el="controls[nav]">
                                        <button class="glide__bullet" data-glide-dir="=0" title="Exibir"></button>
                                        <button class="glide__bullet" data-glide-dir="=1" title="Exibir"></button>
                                        <button class="glide__bullet" data-glide-dir="=2" title="Exibir"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-5 pt-lg-4 mt-4 mt-lg-2">
                        <a class="btn btn-primary btn-lg fs-5 fw-500 border-0 btn-primary-custom px-4"
                            href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank" role="button">
                            <?php echo e(__('texts.quero_um_sistema')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php echo $__env->make('_modal_exibir_sistema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Garantimos a entrega... -->
    <section>
        <div class="pt-4 pt-lg-0">
            <div class="my-5 class-grarantir-entrega px-2 px-lg-0 py-lg-3">
                <div class="px-1 px-lg-0">
                    <div class="container    text-dark text-white">
                        <div class="row align-items-center  gx-3 justify-content-center">
                            <div class="col-12 col-lg-4 py-5 col-1-gantimos-entrega">
                                <h2 class="h2 fw-700">
                                    <?php echo e(__('texts.garantimos_a_entrega_mais_rapida_do_mercado')); ?>

                                </h2>
                                <p class="fw-400 fs-4 mb-3 pb-2 lh-sm">
                                    <?php echo e(__('texts.cobrimos_o_prazo_de_entrega_dos_concorrentes')); ?>

                                </p>
                                <div class="pt-lg-2"></div>
                                <a href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank"
                                    class="btn btn-light fs-4 fw-600 border-0 px-4 py-2 rounded-3">
                                    <?php echo e(__('texts.falar_com_vendedor')); ?>

                                </a>
                                <div class="mt-4 fw-200 text-considerando">
                                    <?php echo e(__('texts.considerando_os_mesmos_itens_e_qualidade_na_entrega')); ?>

                                </div>
                            </div>
                            <div class="col-12 col-lg-4 position-relative">
                                <img src="<?php echo e(asset('assets/images/hourglass.svg')); ?>" alt="Ampulheta"
                                    class="img-ampulheta">
                                <img src="<?php echo e(asset('assets/images/calendar.svg')); ?>" alt="Calendário"
                                    class="img-calendario">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Veja o que nossos clientes estão falando -->
        <section>
            <div class="px-4 px-lg-0">
                <div class="container text-dark my-lg-5 py-lg-4 ">
                    <div class="row align-items-center px-lg-4 gx-5 justify-content-center py-5">
                        <div class="col-12 col-lg-8 class-cliente-falam py-4 py-lg-5">
                            <div class="row align-items-center px-lg-4">
                                <div class="col-12 col-lg-5">
                                    <h2 class="h2 fw-700 pb-2">
                                        <?php echo e(__('texts.veja_o_que_nossos_clientes_estao_falando')); ?>

                                    </h2>
                                    <p class="text-gray fw-500 fs-18px mb-2">
                                        <?php echo e(__('texts.mais_de_30_avaliacoes_no_google')); ?>

                                    </p>
                                    <div class="d-flex gap-1 mb-3 mb-lg-0">
                                        <img src="<?php echo e(asset('assets/icons/star-yellow.svg')); ?>" alt="Estrela"
                                            width="24">
                                        <img src="<?php echo e(asset('assets/icons/star-yellow.svg')); ?>" alt="Estrela"
                                            width="24">
                                        <img src="<?php echo e(asset('assets/icons/star-yellow.svg')); ?>" alt="Estrela"
                                            width="24">
                                        <img src="<?php echo e(asset('assets/icons/star-yellow.svg')); ?>" alt="Estrela"
                                            width="24">
                                        <img src="<?php echo e(asset('assets/icons/star-yellow.svg')); ?>" alt="Estrela"
                                            width="24">
                                        <span class="fw-600 fs-5 ms-1 text-gray">4,9</span>
                                    </div>
                                    <a href="#depoimentos"
                                        class="text-decoration-none text-dark link-video d-none d-lg-block pt-lg-2">
                                        <div
                                            class="d-flex gap-1 align-items-center fw-500 mt-4 fs-18px text-ver-depoimento">
                                            <img src="<?php echo e(asset('assets/icons/play-circle-blue-2.svg')); ?>" alt="Vídeo"
                                                width="25">
                                            <?php echo e(__('texts.veja_depoimentos_em_video')); ?> ↑
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <!-- Lista de comentários -->
                                    <div class="oque-clientes-falam py-3 pt-3">
                                        <div class=" oque-clientes-falam-content px-3 pt-0 ">
                                            <?php echo $__env->make('_avaliacoes_google', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="#depoimentos"
                                            class="text-decoration-none text-dark link-video d-block d-lg-none">
                                            <div class="d-flex gap-1 align-items-center fw-500 mt-4 text-ver-depoimento">
                                                <img src="<?php echo e(asset('assets/icons/play-circle-blue-2.svg')); ?>"
                                                    alt="Vídeo" width="20">
                                                <?php echo e(__('texts.veja_depoimentos_em_video')); ?> ↑
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TOP 5 Perguntas frequentes -->
        <section>
            <div class="container text-dark my-4">
                <div class=" top-perguntas row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-8 ps-lg-2 pe-lg-0">
                        <div class="px-lg-1">
                            <h2 class="h2 fw-700 pb-2 text-center">
                                <?php echo e(__('texts.top_5_perguntas')); ?>

                                <span class="d-inline-block position-relative" id="annotate-frequents">
                                    <?php echo e(__('texts.frequentes')); ?>

                                </span>
                            </h2>
                            <!-- Perguntas -->
                            <div class="">
                                <!-- Hover added -->
                                <ul class="list-unstyled mt-4 pt-lg-3 lista-perguntas">
                                    <!-- resp1 -->
                                    <li class="py-3">
                                        <a class="btn-top-perguntas mb-2 d-flex justify-content-between gap-2 text-decoration-none fs-4 fw-600 collapsed"
                                            data-bs-toggle="collapse" href="#resp1" role="button"
                                            aria-expanded="false" aria-controls="resp1">
                                            <?php echo e(__('texts.por_que_devo_ter_um_sistema')); ?>

                                            <div class="d-none d-lg-block">
                                                <img src="<?php echo e(asset('assets/icons/plus-square-blue.svg')); ?>"
                                                    alt="Exibir" class="exibir-resposta" width="35">
                                                <img src="<?php echo e(asset('assets/icons/minus-square-blue.svg')); ?>"
                                                    alt="Ocultar" class="ocultar-resposta " width="35">
                                            </div>
                                            <img src="<?php echo e(asset('assets/icons/chevron-down-blue.svg')); ?>" alt="Exibir"
                                                class="exibir-resposta d-lg-none" width="30">
                                        </a>
                                        <div class="collapse" id="resp1">
                                            <div class="card card-body border-0 shadow-sm rounded-3 fs-5">
                                                <?php echo e(__('texts.res1')); ?>

                                            </div>
                                        </div>
                                    </li>
                                    <!-- resp2 -->
                                    <li class="py-3">
                                        <a class="btn-top-perguntas mb-2 d-flex justify-content-between gap-2 text-dark text-decoration-none fs-4 fw-600 collapsed"
                                            data-bs-toggle="collapse" href="#resp2" role="button"
                                            aria-expanded="false" aria-controls="resp2">
                                            <?php echo e(__('texts.empresas_pequenas_precisam_de_sistema')); ?>

                                            <div class="d-none d-lg-block">
                                                <img src="<?php echo e(asset('assets/icons/plus-square-blue.svg')); ?>"
                                                    alt="Exibir" class="exibir-resposta" width="35">
                                                <img src="<?php echo e(asset('assets/icons/minus-square-blue.svg')); ?>"
                                                    alt="Ocultar" class="ocultar-resposta " width="35">
                                            </div>
                                            <img src="<?php echo e(asset('assets/icons/chevron-down-blue.svg')); ?>" alt="Exibir"
                                                class="exibir-resposta d-lg-none" width="30">
                                        </a>
                                        <div class="collapse" id="resp2">
                                            <div class="card card-body border-0 shadow-sm rounded-3 fs-5">
                                                <?php echo e(__('texts.res2')); ?>

                                            </div>
                                        </div>
                                    </li>
                                    <!-- resp3 -->
                                    <li class="py-3">
                                        <a class="btn-top-perguntas mb-2 d-flex justify-content-between gap-2 text-dark text-decoration-none fs-4 fw-600 collapsed"
                                            data-bs-toggle="collapse" href="#resp3" role="button"
                                            aria-expanded="false" aria-controls="resp3">
                                            <?php echo e(__('texts.quanto_custa_ter_um_sistema_personalizado')); ?>

                                            <div class="d-none d-lg-block">
                                                <img src="<?php echo e(asset('assets/icons/plus-square-blue.svg')); ?>"
                                                    alt="Exibir" class="exibir-resposta" width="35">
                                                <img src="<?php echo e(asset('assets/icons/minus-square-blue.svg')); ?>"
                                                    alt="Ocultar" class="ocultar-resposta " width="35">
                                            </div>
                                            <img src="<?php echo e(asset('assets/icons/chevron-down-blue.svg')); ?>" alt="Exibir"
                                                class="exibir-resposta d-lg-none" width="30">
                                        </a>
                                        <div class="collapse" id="resp3">
                                            <div class="card card-body border-0 shadow-sm rounded-3 fs-5">
                                                <?php echo e(__('texts.res3')); ?>

                                            </div>
                                        </div>
                                    </li>
                                    <!-- resp4 -->
                                    <li class="py-3">
                                        <a class="btn-top-perguntas mb-2 d-flex justify-content-between gap-2 text-dark text-decoration-none fs-4 fw-600 collapsed"
                                            data-bs-toggle="collapse" href="#resp4" role="button"
                                            aria-expanded="false" aria-controls="resp4">
                                            <?php echo e(__('texts.quanto_tempo_para_produzir_um_sistema')); ?>

                                            <div class="d-none d-lg-block">
                                                <img src="<?php echo e(asset('assets/icons/plus-square-blue.svg')); ?>"
                                                    alt="Exibir" class="exibir-resposta" width="35">
                                                <img src="<?php echo e(asset('assets/icons/minus-square-blue.svg')); ?>"
                                                    alt="Ocultar" class="ocultar-resposta " width="35">
                                            </div>
                                            <img src="<?php echo e(asset('assets/icons/chevron-down-blue.svg')); ?>" alt="Exibir"
                                                class="exibir-resposta d-lg-none" width="30">
                                        </a>
                                        <div class="collapse" id="resp4">
                                            <div class="card card-body border-0 shadow-sm rounded-3 fs-5">
                                                <?php echo e(__('texts.res4')); ?>

                                            </div>
                                        </div>
                                    </li>
                                    <!-- resp5 -->
                                    <li class="py-3">
                                        <a class="btn-top-perguntas mb-2 d-flex justify-content-between gap-2 text-dark text-decoration-none fs-4 fw-600 collapsed"
                                            data-bs-toggle="collapse" href="#resp5" role="button"
                                            aria-expanded="false" aria-controls="resp5">
                                            <?php echo e(__('texts.esse_servico_possui_garantia')); ?>

                                            <div class="d-none d-lg-block">
                                                <img src="<?php echo e(asset('assets/icons/plus-square-blue.svg')); ?>"
                                                    alt="Exibir" class="exibir-resposta" width="35">
                                                <img src="<?php echo e(asset('assets/icons/minus-square-blue.svg')); ?>"
                                                    alt="Ocultar" class="ocultar-resposta " width="35">
                                            </div>
                                            <img src="<?php echo e(asset('assets/icons/chevron-down-blue.svg')); ?>" alt="Exibir"
                                                class="exibir-resposta d-lg-none" width="30">
                                        </a>
                                        <div class="collapse" id="resp5">
                                            <div class="card card-body border-0 shadow-sm rounded-3 fs-5">
                                                <?php echo e(__('texts.res5')); ?>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Se você chegou até aqui, provavelmente -->
    <section>
        <div class="py-5 pb-0">
            <div class="container position-relative">
                <div class="row align-items-center px-lg-2 gx-1 justify-content-center">
                    <div class="col-12 col-lg-8 py-0 row align-items-center">
                        <div class="col-12 py-0 px-0 px-lg-1 position-relative">
                            <img src="<?php echo e(asset('assets/images/launch.svg')); ?>" class=" aumentar-eficiencia-foguete-2 "
                                alt="Launch" id="icon-foguete">
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white  px-0 px-lg-0 m-3 mb-0 mx-0 mx-lg-0 class-aumentar-eficiencia position-relative overflow-hidden">
                <!-- Vídeo BG -->
                <video class="play-video-headersss" style="display: none" id="myVideo-2"
                    onloadedmetadata="this.muted = true;this.style.display='block';" playsinline autoplay muted loop>
                    <source src="<?php echo e(asset('assets/video/header-bg.mp4')); ?>?73" type="video/mp4">
                </video>
                <!-- Conteúdo -->
                <div class="container text-dark" style="z-index: 1 !important">
                    <div class="row align-items-center px-lg-2 gx-1 justify-content-center" style="z-index: 1 !important">
                        <div class="col-12 col-lg-8 row align-items-center">
                            <div class="col-12 col-lg-7 py-5 px-0 px-lg-1 col-1-aumentar-eficiencia"
                                style="z-index: 1 !important">
                                <div class="px-1 px-lg-0 py-5">
                                    <div class="fw-500 mb-2 fs-4 class-aumentar-eficiencia-texto">
                                        <?php echo e(__('texts.se_voce_chegou_ate_aqui_provavelmente')); ?>

                                    </div>
                                    <h2 class="h2 fw-600 pb-2 ">
                                        <?php echo e(__('texts.quer')); ?>

                                        <span class="d-inline-block position-relative" id="annotate-aumenta-eficiencia">
                                            <?php echo e(__('texts.aumentar_a_eficiencia')); ?>

                                        </span>
                                        <?php echo e(__('texts.do_seu_negocio_com_um_sistema_pensado')); ?>

                                        <span class="d-inline-block position-relative" id="anot-especial-1">
                                            <span id="anot-especial-2">
                                                <?php echo e(__('texts.especialmente')); ?>

                                            </span>
                                        </span>
                                        <?php echo e(__('texts.nos_processos_da_sua_empresa')); ?>

                                    </h2>
                                    <p class="fw-500 mb-2 fs-4 mb-4 class-aumentar-eficiencia-texto">
                                        <?php echo e(__('texts.entao_peca_um_orcamento')); ?>

                                    </p>
                                    <div class="mt-3">
                                        <a href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank"
                                            class="btn btn-primary btn-lg fs-5 fw-500 border-0 btn-primary-custom px-4">
                                            <?php echo e(__('texts.solicitar_orcamento')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5" style="z-index: 1 !important">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voltar ao topo -->
    <div class="class-voltar-topo px-3 py-2 text-center text-white">
        <button type="button"
            class="btn fs-18px btn-none border-0 text-white gap-2 fw-500 d-flex align-items-center justify-content-center mx-auto"
            id="btn-topo">
            <img src="<?php echo e(asset('assets/icons/arrow-up-circle.svg')); ?>" alt="Topo" width="22">
            <?php echo e(__('texts.voltar_para_o_topo')); ?>

        </button>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- Rough Notation -->
    <script type="module" src="<?php echo e(asset('assets/js/annotate.js')); ?>"></script>
    <!-- Glide Carousel -->
    <script src="<?php echo e(asset('assets/libs/glide-3.6.0/dist/glide.min.js')); ?>"></script>
    <!-- Config Glide -->
    <script src="<?php echo e(asset('assets/js/glide.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u292571460/domains/indutivatecnologia.com/public_html/lp-sistemas/resources/views/home.blade.php ENDPATH**/ ?>