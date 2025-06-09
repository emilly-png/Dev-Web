const banners = [
    {
      img: "https://blog.ebaconline.com.br/blog/wp-content/uploads/2022/12/kcnb4lkkucfipej3ngqxm-scaled-e1674744655926.jpeg",
      titulo: "GameMind",
      textoBotao: "Comece a jogar agora!",
      link: "login.blade.php"
    },
    {
      img: "https://www.fiee.com.br/content/dam/sitebuilder/rxb/fiee/2024/blog/FIEE%20Games.jpg/_jcr_content/renditions/original.image_file.2400.1600.file/FIEE%20Games.jpg",
      titulo: "GameMind",
      textoBotao: "Comece a jogar agora!",
      link: "cadastro.blade.php"
    },
    {
      img: "https://assets.gamearena.gg/wp-content/uploads/2024/05/17143757/Materia-Pedro-1024x576.png",
      titulo: "GameMind",
      textoBotao: "Comece a jogar agora!",
      link: "login.blade.php"
    }
  ];
  
  let index = 0;
  const bannerImg = document.getElementById('banner-img');
  const tituloPrincipal = document.querySelector('.banner .texto .titulo-principal');
  const btnComecar = document.getElementById('btn-comecar');
  const bannerDiv = document.getElementById('banner');
  
  function atualizarBanner() {
    bannerImg.src = banners[index].img;
    tituloPrincipal.textContent = banners[index].titulo;
    btnComecar.textContent = banners[index].textoBotao;
  }
  
  document.getElementById('prev').addEventListener('click', e => {
    e.stopPropagation();
    index = (index - 1 + banners.length) % banners.length;
    atualizarBanner();
  });
  
  document.getElementById('next').addEventListener('click', e => {
    e.stopPropagation();
    index = (index + 1) % banners.length;
    atualizarBanner();
  });
  
  btnComecar.addEventListener('click', e => {
    e.stopPropagation();
    window.location.href = banners[index].link;
  });
  
  bannerDiv.addEventListener('click', () => {
    window.location.href = banners[index].link;
  });
  
  atualizarBanner();
  