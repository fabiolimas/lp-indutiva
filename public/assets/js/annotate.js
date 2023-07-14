/**
* Rough Notation
*/
import { annotate } from 'https://cdnjs.cloudflare.com/ajax/libs/rough-notation/0.5.1/rough-notation.esm.min.js?module';

function showAnnotate(idElement, annotateInstance) {

    let elemento = document.getElementById(idElement);
    let distanciaDoTopoItem = elemento.offsetTop;

    let alturaDaTela = window.innerHeight;
    let scrollDoTopo = window.scrollY || window.pageYOffset;

    // if (idElement == 'annotate-aumenta-eficiencia')
        // console.log(scrollDoTopo, distanciaDoTopoItem);

    let distanciaTotal = alturaDaTela + scrollDoTopo - (alturaDaTela / 3)
    if (distanciaTotal >= distanciaDoTopoItem) {
        if (annotateInstance.isShowing() == false) {
            annotateInstance.hide();
            annotateInstance.show();
        }
    }
}

const configAnnotateCircle = {
    animationDuration: 1000,
    type: 'circle',
    color: '#1977F3',
    padding: [5, 0, 5, 4],
    strokeWidth: 5,
    iterations: 1,
    rtl: false
}
const configAnnotateUnderline = {
    animationDuration: 1000,
    type: 'underline',
    color: '#1977F3',
    padding: -1,
    strokeWidth: 5,
    iterations: 1,
    rtl: false
}

const annotateSisPers = annotate(document.getElementById('annotate-sistema-pers'), configAnnotateUnderline);
const annotateSisPers2 = annotate(document.getElementById('annotate-sistema-pers_mobile2'), configAnnotateUnderline);
const annotateSisPers3 = annotate(document.getElementById('annotate-sistema-pers_mobile3'), configAnnotateUnderline);
const annotateAumentaEfic = annotate(document.getElementById('annotate-aumenta-eficiencia'), configAnnotateUnderline);
const annotateFrequents = annotate(document.getElementById('annotate-frequents'), configAnnotateUnderline);
const annotateTodosMeses = annotate(document.getElementById('anot-todos-meses'), configAnnotateUnderline);
const annotatePersona = annotate(document.getElementById('anot-personali'), configAnnotateCircle);
const annotateImpact = annotate(document.getElementById('anot-impact'), configAnnotateUnderline);
const annotateEntreg = annotate(document.getElementById('anot-entrega'), configAnnotateCircle);
const annotateEsp1 = annotate(document.getElementById('anot-especial-1'), configAnnotateUnderline);
function runShowAnnotate() {
    showAnnotate('annotate-sistema-pers', annotateSisPers)
    showAnnotate('annotate-sistema-pers_mobile2', annotateSisPers2)
    showAnnotate('annotate-sistema-pers_mobile3', annotateSisPers3)
    showAnnotate('annotate-aumenta-eficiencia', annotateAumentaEfic)
    showAnnotate('annotate-frequents', annotateFrequents)
    showAnnotate('anot-todos-meses', annotateTodosMeses)
    showAnnotate('anot-personali', annotatePersona)
    showAnnotate('anot-impact', annotateImpact)
    showAnnotate('anot-entrega', annotateEntreg)
    showAnnotate('anot-especial-1', annotateEsp1)
}
document.body.onscroll = function () {
    runShowAnnotate()
}
runShowAnnotate()
