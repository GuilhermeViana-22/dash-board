const boxPerfilUser = document.querySelector('.box_perfil_user')
const dropAcoesPerfil = document.querySelector('.drop_acoes_perfil')

boxPerfilUser.addEventListener('click', () => {
    dropAcoesPerfil.classList.toggle('anima_acao_usuario')
})


// nome da animacao    anima_acao_usuario