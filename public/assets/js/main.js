/* voltar a topo */
const btnTopo = document.querySelector('#btn-topo');
btnTopo.addEventListener('click', function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Opção para suavizar a transição
    });
});


// Vídeo header de fundo
// var video = document.getElementById("myVideo");

// function playVideoHeader() {
//     if (video.paused) {
//         video.play();
//     }
// }
// video.addEventListener('loadeddata', function () {
//     // console.log('O vídeo está pronto para iniciar!');
//     video.style.display = 'block'
//     // Faça alguma ação aqui, como iniciar a reprodução do vídeo
// });
// video.src = "/assets/video/header-bg.mp4?t=111"
// playVideoHeader()

// vídeo fundo seção aumentar eficiência
// var video2 = document.getElementById("myVideo-2");

// function playVideo2Header() {
//     if (video2.paused) {
//         video2.play();
//     }
// }
// video2.addEventListener('loadeddata', function () {
//     // console.log('O vídeo está pronto para iniciar!');
//     video2.style.display = 'block'
//     // Faça alguma ação aqui, como iniciar a reprodução do vídeo
// });
// video2.src = "/assets/video/header-bg.mp4?t=888"
// playVideo2Header()

/*  */
// var playerHeader = videojs("video-modal-header", {
//     controlBar: {
//         fullscreenToggle: false,
//         pictureInPictureToggle: false
//     }
// });

function clickPlayerHeader() {
    playerHeader.play()
}

function closePlayerHeader() {
    playerHeader.pause()
    playerHeader.currentTime(0)
}

const modalHeaderVideo = document.getElementById('modal-video-header')
modalHeaderVideo.addEventListener('hidden.bs.modal', event => {
    closePlayerHeader()
})

/**
 * --------------------------------------------------------------------
 * Alternar tema
 * --------------------------------------------------------------------
 */
document.getElementById('alternar-tema').onclick = function () {
    alternarTema()
}

function alternarTema() {
    if (document.cookie.indexOf('tema_dark=1') != -1) {
        document.body.className = ''
        document.cookie = "tema_dark=0"
    } else {
        document.body.className = 'dark'
        document.cookie = "tema_dark=1"
    }
    alternarTextoTema()
}

function alternarTextoTema() {
    if (document.cookie.indexOf('tema_dark=1') != -1) {
        document.getElementById('text-modo-tema').innerHTML = textModoEscuro
        document.getElementById('icon-escuro').style.display = 'inline-block'
        document.getElementById('icon-claro').style.display = 'none'
        document.getElementById('checkbox-alternar-tema').checked = false

    } else {
        document.getElementById('text-modo-tema').innerHTML = textModoClaro
        document.getElementById('icon-claro').style.display = 'inline-block'
        document.getElementById('icon-escuro').style.display = 'none'
        document.getElementById('checkbox-alternar-tema').checked = true
    }
}
alternarTextoTema()

let dateCurrent = new Date()
let horaAtual = dateCurrent.getHours()

if (horaAtual < 6 || horaAtual >= 18 && document.cookie.indexOf('tema_dark') === -1)
    alternarTema()


/**
 * Exibir comentário completo
 */
function exibirMsg(id, thisEl) {
    thisEl.className = 'd-none'
    document.getElementById(id).className = ''
}


/**
 * Logos de empresas
 */
const linha1 = document.getElementById('flex-soluciona-1');
const linha2 = document.getElementById('flex-soluciona-2');
document.getElementById('flex-soluciona-1').classList.add('flex-soluciona-1-start')
document.getElementById('flex-soluciona-2').classList.add('flex-soluciona-2-start')

// Adicione um ouvinte de evento para o evento transitionend
linha1.addEventListener('transitionend', function (event) {
    // Verifique se a propriedade de transição que terminou é a desejada
    if (event.propertyName === 'left') {
        // A transição da propriedade 'width' foi concluída
        linha1.style.left = '-500px'
        linha1.style.transition = 'left 0s linear'
        setTimeout(() => {
            linha1.style.transition = 'left 20s linear'
            linha1.style.left = '-2500px'
        }, 10);
    }
});

linha2.addEventListener('transitionend', function (event) {
    // Verifique se a propriedade de transição que terminou é a desejada
    if (event.propertyName === 'left') {
        // A transição da propriedade 'width' foi concluída
        linha2.style.left = '-2500px'
        linha2.style.transition = 'left 0s linear'
        setTimeout(() => {
            linha2.style.transition = 'left 20s linear'
            linha2.style.left = '-500px'
        }, 10);
    }
});


/**
 * LETREIROS
 */

// Selecione o elemento que possui a transição
const elemento = document.getElementById('text-laranja-letreiro');
const elementoAzul = document.getElementById('text-azul-letreiro');

// Adicione um ouvinte de evento para o evento transitionend
elemento.addEventListener('transitionend', function (event) {
    // Verifique se a propriedade de transição que terminou é a desejada
    if (event.propertyName === 'left') {
        // A transição da propriedade 'width' foi concluída

        elemento.style.left = '-2000px'
        elemento.style.transition = 'left 0s linear'
        setTimeout(() => {
            elemento.style.transition = 'left 20s linear'
            elemento.style.left = '-1000px'
        }, 10);
    }
});

// Adicione um ouvinte de evento para o evento transitionend
elementoAzul.addEventListener('transitionend', function (event) {
    // Verifique se a propriedade de transição que terminou é a desejada
    if (event.propertyName === 'left') {
        // A transição da propriedade 'width' foi concluída

        elementoAzul.style.left = '-1000px'
        elementoAzul.style.transition = 'left 0s linear'
        setTimeout(() => {
            elementoAzul.style.transition = 'left 20s linear'
            elementoAzul.style.left = '-2000px'
        }, 10);
    }
});

/**
 * Função para detectar a direção do scroll e mudar direcao do latreiro e deixar mais rapido
 */
document.getElementById('letreiro-laranja').classList.add('transacao-letreiro-laranja')
document.getElementById('letreiro-azul').classList.add('transacao-letreiro-azul')
function detectarDirecaoScroll(event) {
    var direcao;

    /**
     * Letreiro laranja
     */
    if (event.deltaY < 0) { //mudar direçao quando scroll sobre
        if (elemento.style != '6000px') {
            elemento.style.left = '6000px'
            setTimeout(() => {
                elemento.style.left = '-1000px'
            }, 200);
        }
    } else if (event.deltaY > 0) { // mudar direção quando o scroll desce
        if (elemento.style != '-8000px') {
            elemento.style.left = '-8000px'
            setTimeout(() => {
                elemento.style.left = '-1000px'
            }, 200);
        }
    }


    /**
     * Letreiro azul
     */
    if (event.deltaY < 0) { //mudar direção quando o letreiro sobe
        if (elementoAzul.style != '-8000px') {
            elementoAzul.style.left = '-8000px'
            setTimeout(() => {
                elementoAzul.style.left = '-2500px'
            }, 200);
        }
    } else if (event.deltaY > 0) { //mudar direção quando o letreiro desce
        if (elementoAzul.style != '4000px') {
            elementoAzul.style.left = '4000px'
            setTimeout(() => {
                elementoAzul.style.left = '-2500px'
            }, 200);

        }
    }


    /**
    * Mudar direção logos
    */
    console.log(linha1.offsetLeft);
    organizarLinha2(linha2)
    organizarLinha1(linha1)

    // linha 1
    if (event.deltaY < 0) { //mudar direção quando  sobe
        linha1.style.left = '-10000px'
        setTimeout(() => {
            linha1.style.left = '-2500px'
        }, 200);
    } else if (event.deltaY > 0) { //mudar direção quando desce
        if (linha1.style.left != '8000px') {
            linha1.style.left = '8000px'
            setTimeout(() => {
                linha1.style.left = '-2500px'
            }, 200);
        }
    }

    // linha 2
    if (event.deltaY < 0) { //mudar direçao quando scroll sobre
        if (linha2.style != '8000px') {
            linha2.style.left = '8000px'
            setTimeout(() => {
                linha2.style.left = '-500px'
            }, 200);
        }
    } else if (event.deltaY > 0) { // mudar direção quando o scroll desce
        if (linha2.style != '-10000px') {
            linha2.style.left = '-10000px'
            setTimeout(() => {
                linha2.style.left = '-500px'
            }, 200);
        }
    }
}
// Adicione um ouvinte de evento para o scroll
window.addEventListener("wheel", detectarDirecaoScroll);

/**
 * Swiper Slide
 */
// Vídeos depoimentos
// const swiper = new Swiper('.swiper', {
//     // spaceBetween: 40,
//     effect: "coverflow",
//     centeredSlides: true,
//     coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 100,
//         modifier: 1,
//         slideShadows: true,
//     },

//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,

//     // If we need pagination
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 1,
//         },
//         768: {
//             slidesPerView: 2,
//         },
//         1024: {
//             slidesPerView: 3,
//         },
//     },

//     // Navigation arrows
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },

//     // And if we need scrollbar
//     scrollbar: {
//         el: '.swiper-scrollbar',
//         enabled: false
//     },
// });
// Alguns sistema
// const swiperAlgunsSistemas = new Swiper('.swiper-alguns-sistemas', {
//     // spaceBetween: 40,
//     effect: "coverflow",
//     centeredSlides: true,
//     coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 100,
//         modifier: 1,
//         slideShadows: true,
//     },

//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,

//     // If we need pagination
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 1,
//         },
//         768: {
//             slidesPerView: 2,
//         },
//         1024: {
//             slidesPerView: 3,
//         },
//     },

//     // Navigation arrows
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },

//     // And if we need scrollbar
//     scrollbar: {
//         el: '.swiper-scrollbar',
//         enabled: false
//     },
// });


/**
 * Modais vídeos depoimentos
 */
var dep1 = videojs("video-depoimento-1", {
    controlBar: {
        fullscreenToggle: false,
        pictureInPictureToggle: false
    }
});
var dep2 = videojs("video-depoimento-2", {
    controlBar: {
        fullscreenToggle: false,
        pictureInPictureToggle: false
    }
});

const modalDep1 = document.getElementById('modal-video-depoimento-1')
modalDep1.addEventListener('hidden.bs.modal', event => {
    dep1.pause(); dep1.currentTime(0)
})
const modalDep2 = document.getElementById('modal-video-depoimento-2')
modalDep2.addEventListener('hidden.bs.modal', event => {
    dep2.pause(); dep2.currentTime(0)
})

// var dep3 = videojs("video-depoimento-3", {
//     controlBar: {
//         fullscreenToggle: false,
//         pictureInPictureToggle: false
//     }
// });
// var dep4 = videojs("video-depoimento-4", {
//     controlBar: {
//         fullscreenToggle: false,
//         pictureInPictureToggle: false
//     }
// });
// var dep5 = videojs("video-depoimento-5", {
//     controlBar: {
//         fullscreenToggle: false,
//         pictureInPictureToggle: false
//     }
// });


function organizarLinha2(linha2_el) {
    if (linha2_el.offsetLeft >= 0) {
        let mlLInha2 = Number(linha2_el.style.marginLeft.replace('px', '')) - 1000;
        linha2_el.style.marginLeft = mlLInha2 + "px"
    }
    if (linha2_el.offsetLeft <= -4500) {
        let mlLInha2 = Number(linha2_el.style.marginLeft.replace('px', '')) + 1000;
        linha2_el.style.marginLeft = mlLInha2 + "px"
    }
}
function organizarLinha1(linha1_el) {
    if (linha1_el.offsetLeft >= 0) {
        let mlLInha2 = Number(linha1_el.style.marginLeft.replace('px', '')) - 2000;
        linha1_el.style.marginLeft = mlLInha2 + "px"
    }
    if (linha1_el.offsetLeft <= -4500) {
        let mlLInha2 = Number(linha1_el.style.marginLeft.replace('px', '')) + 2000;
        linha1_el.style.marginLeft = mlLInha2 + "px"
    }
}

setInterval(() => {
    organizarLinha2(linha2)
    organizarLinha1(linha1)
}, 500);


// video youtube



          let x = window.matchMedia("(max-width: 760)");
          if (x.matches) {
            $("#cfs").addClass("cfsm");
          } else {
            // Variável que armazena o ID do vídeo do YouTube

            var linguagem=document.querySelector("#linguagem").value;
            if(linguagem=='pt_BR'){
                var youtubeId = "NAIWXKniRoA";
            }else{
                var youtubeId = "dC8NC_Xh9Kw";

            }

            var vplay = false;
          }





         let tag = document.createElement('script');
          tag.src = "https://www.youtube.com/iframe_api";
          let firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          var player;
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
              videoId: youtubeId,
              playerVars: {
                autoplay: vplay,
                cc_load_policy: 0,
                controls: 0,
                disablekb: 1,
                playsinline: 1,
                modestbranding: 1,
                iv_load_policy: 3,
                rel: 0,
                showinfo: 0,
                host: 'https://www.youtube.com',

                enablejsapi: 1
              },
              events: {
                onReady: onPlayerReady,
                onStateChange: onPlayerStateChange,
                onError: onPlayerError
              }
            });
          }



          function onPlayerReady() {



            if (!isSafari) {
              player.playVideo();
              mutevid();
            }

            // if (nw) {
            //   player.seekTo(0);
            //   nw = false;
            // }
            // if (na == 1) {
            //   resetvid();
            // }

            // if (sc == 1) {
            //   updateTimerDisplay();
            //   updateProgressBar();
            //   time_update_interval = setInterval(function () {
            //     updateTimerDisplay();
            //     updateProgressBar();
            //   }, 1000);
            // }
            console.log('READY');
          }

          function showElements(className, value) {
            for (const element of document.getElementsByClassName(className)) {
              element.style.display = value;
            }
          }

          function onPlayerStateChange(e) {

            $("#closeModal").click(function(){
                player.pauseVideo();
                console.log('Video pausado');
              });

            if (timerStarted) {
              if (e.data === YT.PlayerState.PLAYING) {
                setTimeout(() => {
                  showElements(DELAY_ELEMENTS_CLASS, 'block');
                }, DELAY_TIME_IN_SECONDS * 1000);
              }
            }

            let isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

            console.log('State Change');
            console.log(e);
            let c=0;
            if (e.data === -1) {
             c++;
              if (c > 1) {
                setTimeout(function () {
                  if (player.getPlayerState() === -1) {
                    resetvid();
                  }
                }, 3500);
              }
            }

            if (e.data === 1) {
              $("#loadingVideo").hide();




            }

            if (e.data === 2) {
              $("#loadingVideo").hide();

            }

            if (e.data === 3) {
            }

            if (e.data === 0 || e.data === 5) {
              $("#loadingVideo").hide();

            }

          }

          function onPlayerError(e) {


            player.stopVideo();


          }






          function isSafari() {
            return /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
          }

          if (isSafari()) {
            document.documentElement.classList.add('safari');
          }

          function isSafariCompatibleVersion() {
            let match = navigator.userAgent.match(/Version\/(\d+)/);
            if (match && match[1]) {
              let version = parseInt(match[1]);
              return version >= 12;
            }
            return false;
          }

          function mutevid() {
            if (isSafari() && !isSafariCompatibleVersion()) {
              // Safari não compatível, não faça nada
              return;
            }

            if (typeof player !== 'undefined') {
              if (isSafari()) {
                player.muted = true;
              } else {
                player.mute();
              }
              player.setVolume(0);
              muteStatus = 1;
            }
          }

          function unmutevid() {
            if (isSafari() && !isSafariCompatibleVersion()) {
              // Safari não compatível, não faça nada
              return;
            }

            if (typeof player !== 'undefined') {
              if (isSafari()) {
                player.muted = false;
              } else {
                player.unMute();
              }
              player.setVolume(100);
              muteStatus = 0;
            }
          }

          function resetvid() {
            $("#loadingVideo").hide();
            $(".cov").show();
            player.pauseVideo();
            unmutevid();
            player.seekTo(0);
          }


          /*
          Ative essa função se quiser que tenha pausa no vídeo :)

          $(".covall").click(function() {
              player.pauseVideo();
              $("#cfs").hide();
              $(".cov").show();

          });

          */



          function formatTime(time) {
            time = Math.round(time);
            let minutes = Math.floor(time / 60),
              seconds = time - minutes * 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            return minutes + ":" + seconds;
          }






