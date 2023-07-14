/* Adicionar tema ao iniciar página */
function setTheme() {
    if (document.cookie.indexOf('tema_dark=1') != -1) {
        document.body.className = 'dark'
    }
    // Se não ouver cookie para exibir determinado tema, o tema será determinado pela hora atual
    if (document.cookie.indexOf('tema_dark') === -1) {
        // document.body.className = 'dark'
        let date = new Date()
        let hora = date.getHours()
        if (hora >= 6 && hora < 18) {
            document.body.className = ''
        } else {
            document.body.className = 'dark'
        }
    }
}
