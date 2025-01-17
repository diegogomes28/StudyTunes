<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/nav.css" />
    <link rel="stylesheet" href="./assets/css/swiper.css" />
    <link rel="stylesheet" href="./assets/css/plans.css" />
    <link rel="stylesheet" href="./assets/css/banners.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/register.css" />
    <link rel="stylesheet" href="./assets/css/login.css" />

    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      defer
    ></script>
    <script src="./assets/script/main.js" defer></script>

    <title>LIFE Academia</title>
  </head>

  <!-- ----------------------------------------------------------INICIO DO BODY----------------------------------------------------------->
  <body>
    <header class="header__nav">
      <nav class="nav__container">
      <div class="nav__logo">
          <a href="index.php">
            <img src="./assets/img/amarela1.svg" alt="foto da logo da academia"
          /></a>
        </div>

        <div class="nav__func">
          <ul class="nav__ul">
            <li class="nav__func__itens">
              <a href="index.php#unidades" class="item">Unidades</a>
            </li>
            <li class="nav__func__itens">
              <a href="index.php#planos" class="item">Planos</a>
            </li>
            <li class="nav__func__itens">
              <a href="#" class="item contato__alert" >Contato</a>
            </li>
            <li class="nav__func__itens">
              <a href="login.php" class="area">Área do aluno</a>
            </li>
            <li class="nav__func__itens">
              <a href="register.php" class="matricula">Matricule-se</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="logo__principal">
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="swiper__all">
                <img
                  src="./assets/img/menu-banner.png"
                  alt="logo principal"
                  class="logo_1"
                />
                <div class="swiper__content">
                  <h1 class="swiper__title">musculação</h1>
                  <h6 class="swiper__subtitle">
                    Aprimore sua força e resistência com nossos equipamentos de
                    última geração.
                  </h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper__all">
                <img
                  src="./assets/img/cadio.png"
                  alt="logo principal"
                  class="logo_1"
                />
                <div class="swiper__content">
                  <h1 class="swiper__title">cardio</h1>
                  <h6 class="swiper__subtitle">
                    Melhore sua saúde cardiovascular com uma variedade de
                    máquinas de cardio modernas.
                  </h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper__all">
                <img
                  src="assets/img/instrutores.png"
                  alt="logo principal"
                  class="logo_1"
                />
                <div class="swiper__content">
                  <h1 class="swiper__title">instrutores especializados</h1>
                  <h6 class="swiper__subtitle">
                    Treine com profissionais qualificados que personalizam seu
                    plano de exercícios.
                  </h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper__all">
                <img
                  src="assets/img/spin.png"
                  alt="logo principal"
                  class="logo_1"
                />
                <div class="swiper__content">
                  <h1 class="swiper__title">spinning</h1>
                  <h6 class="swiper__subtitle">
                    Participe das nossas dinâmicas aulas de spinning e queime
                    calorias pedalando ao som de músicas animadas.
                  </h6>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper__all">
                <img
                  src="assets/img/aulas.png"
                  alt="logo principal"
                  class="logo_1"
                />
                <div class="swiper__content">
                  <h1 class="swiper__title">AULAS COLETIVAS</h1>
                  <h6 class="swiper__subtitle">
                    Divirta-se e fique em forma com nossas diversas aulas em
                    grupo, como yoga e pilates.
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="container__plans" id="planos">
        <div class="plans__content">
          <h6 class="plans__title">Escolha o seu plano</h6>
        </div>

        <div class="container__banner">
          <!---------------------PLANO EM DOBRO-------------------------------->
          <div class="banner__plan up">
            <img
              src="./assets/img/esteir.jpg"
              alt="foto de homem correndo na esteira"
              class="banner__plan__img"
            />
            <div class="banner__plan__content">
              <h2 class="banner__plan__title">
                <span>plano em </span>
              </h2>
              <span class="titulodois">dobro</span>

              <h6>a partir de</h6>
              <h2 class="banner_plan_preco">R$ 149,90</h2>

              <ul class="banner__benefits">
                <li class="beneficios">Aulas coletivas</li>
                <li class="beneficios purple">Duas pessoas treinam</li>
                <li class="beneficios">Musculação</li>
                <li class="beneficios">Sem renovação automática</li>
                <li class="beneficios">Trinta dias para congelamento</li>
                <li class="beneficios">Zero taxa de manutenção</li>
                <li class="beneficios">Zero taxa de matrícula</li>
              </ul>
            </div>
          </div>
          <!---------------------PLANO GOLD-------------------------------->
          <div class="banner__plan">
            <img
              src="./assets/img/malhando.jpg"
              alt="foto de homem malhando"
              class="banner__plan__img"
            />
            <div class="banner__plan__content down">
              <h2 class="banner__plan__title">
                <span>plano </span>
              </h2>
              <span class="titulodois">gold</span>

              <h6>a partir de</h6>
              <h2 class="banner_plan_preco">R$ 89,90</h2>

              <ul class="banner__benefits">
                <li class="beneficios">Aulas coletivas</li>
                <li class="beneficios">Horários livres</li>
                <li class="beneficios">Musculação livre</li>
                <li class="beneficios">Sem renovação automática</li>
                <li class="beneficios">Zero taxa de manutenção</li>
                <li class="beneficios purple">Zero taxa de matrícula</li>
              </ul>
            </div>
          </div>
          <!---------------------PLANO VIP-------------------------------->
          <div class="banner__plan up">
            <img
              src="./assets/img/bike.jpg"
              alt="foto de mulher agachando"
              class="banner__plan__img"
            />
            <div class="banner__plan__content">
              <h2 class="banner__plan__title">
                <span>plano </span>
              </h2>
              <span class="titulodois">vip</span>

              <h6>a partir de</h6>
              <h2 class="banner_plan_preco">R$ 139,90</h2>

              <ul class="banner__benefits">
                <li class="beneficios">
                  Musculação livre em qualquer <br /><span class="purple"
                    >academia da Rede*</span
                  >
                </li>

                <li class="beneficios">Sem renovação automática</li>
                <li class="beneficios">Spinning</li>
                <li class="beneficios">Trinta dias para congelamento</li>
                <li class="beneficios">Zero taxa de manutenção</li>
                <li class="beneficios">Zero taxa de matrícula</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="container__plans second" id="unidades">
        <div class="plans__content__unidades">
          <h6 class="plans__unidades">Nossas unidades</h6>
        </div>
        <div class="container__banner">
          <div class="banner__plan2">
            <img
              src="./assets/img/academia1.jpg"
              alt="foto de mulher agachando"
              class="banner__plan__img2"
            />
            <div class="banner__plan2__content">
              <h3>Epitácio Pessoa</h3>
              <p>Avenida Presidente Epitácio Pessoa, 1400 Expedicionários</p>
              <p>João Pessoa - PB</p>
            </div>
          </div>
          <div class="banner__plan2">
            <img
              src="./assets/img/academia2.jpg"
              alt="foto de mulher agachando"
              class="banner__plan__img2"
            />
            <div class="banner__plan2__content">
              <h3>Mag Shopping</h3>
              <p>Av. Gov. Flavio Ribeiro Coutinho, 115 Manaíra</p>
              <p>João Pessoa - PB</p>
            </div>
          </div>
          <div class="banner__plan2">
            <img
              src="./assets/img/academia3.jpg"
              alt="foto de mulher agachando"
              class="banner__plan__img2"
            />
            <div class="banner__plan2__content">
              <h3>Tambaú</h3>
              <p>Avenida Monsenhor Odilon Coutinho, 128 Cabo Branco</p>
              <p>João Pessoa - PB</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!---------------------------------------------------------- footer -------------------------------------------------------------------------------------------------------------------------->
    <footer id="footer">
      <div class="footer__container">
        <div class="footer_logos">
          <div class="footer_logo__principal">
            <img src="./assets/img/toda branca 2.svg" alt="logo footer" />
          </div>
          <div class="footer_logo__icones">
            <img src="./assets/img/_WhatsApp.png" alt="logo _WhatsApp" />
            <img src="./assets/img/_Instagram.png" alt="logo instagram" />
            <img src="assets/img/_YouTube.png" alt="logo youtube" />
          </div>
        </div>

        <ul class="footer_lista">
          <h3>Horário de funcionamento</h3>
          <li class="footer_lista__item">Segunda à Sexta: 06:00 às 22:00</li>
          <li class="footer_lista__item">Sábados: 08:30 às 14:00</li>
          <li class="footer_lista__item">Domingos e Feriados 10:00 às 13:00</li>
        </ul>

        <ul class="footer_lista">
          <h3>Entre em contato</h3>
          <li class="footer_lista__item">Life_SAC@gmail.com</li>
          <li class="footer_lista__item">
            Avenida Presidente Epitácio Pessoa, Expedicionários
          </li>
        </ul>

        <ul class="footer_lista">
          <h3>Site</h3>
          <li class="footer_lista__item">
            <a href="index.php#unidades">Unidades</a>
          </li>
          <li class="footer_lista__item">
            <a href="index.php#planos">Planos</a>
          </li>
          <li class="footer_lista__item" ><a href="#" class="contato__alert">Contatos</a></li>
          <li class="footer_lista__item">
            <a href="login.php">Área do aluno</a>
          </li>
          <li class="footer_lista__item">
            <a href="register.php">Matricule-se </a>
          </li>
        </ul>
      </div>
      <p class="copyright">
        2024 Life Academia © Todos os direitos reservados. Desenvolvido por
        Grupo Jeofton
      </p>
    </footer>
    <script src="./assets/script/script.js"></script>
  </body>
</html>
