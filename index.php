<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FinEduHub | Financial Literacy</title>
    <meta property="og:title" content="Active Online Software Page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

        fill: var(--dl-color-gray-black);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <style>
       body::-webkit-scrollbar {
         width: 0.5em;
         z-index: 100;
         background-color:transparent;
       }


      body::-webkit-scrollbar-thumb {
         background-color:white;
         box-shadow:0 -100vh 0 100vh #5128f5;//magic
       }
    </style>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container">
        <section class="home-hero">
          <div class="home-menu">
            <div id="mobile-menu" class="home-mobile-navigation">
            <h1 class="home-text03">FinEdu Hub</h1>
              <div class="home-links">
                <span class="Link"><a href="#">Home</a></span>
                <span class="Link"><a href="resources.html">Resources</a></span>
                <span class="Link"><a href="#">About</a></span>
                <span class="Link"><a href="#">Contact</a></span>
              </div>
              <div id="close-mobile-menu" class="home-close-mobile-menu">
                <svg viewBox="0 0 804.5714285714286 1024" class="home-icon">
                  <path
                    d="M741.714 755.429c0 14.286-5.714 28.571-16 38.857l-77.714 77.714c-10.286 10.286-24.571 16-38.857 16s-28.571-5.714-38.857-16l-168-168-168 168c-10.286 10.286-24.571 16-38.857 16s-28.571-5.714-38.857-16l-77.714-77.714c-10.286-10.286-16-24.571-16-38.857s5.714-28.571 16-38.857l168-168-168-168c-10.286-10.286-16-24.571-16-38.857s5.714-28.571 16-38.857l77.714-77.714c10.286-10.286 24.571-16 38.857-16s28.571 5.714 38.857 16l168 168 168-168c10.286-10.286 24.571-16 38.857-16s28.571 5.714 38.857 16l77.714 77.714c10.286 10.286 16 24.571 16 38.857s-5.714 28.571-16 38.857l-168 168 168 168c10.286 10.286 16 24.571 16 38.857z"
                  ></path>
                </svg>
              </div>
            </div>
            <div class="home-desktop-navigation">
              <nav class="home-centered">
                <h1 class="home-text03">FinEdu Hub</h1>
                <div class="home-left">
                  <div class="home-links1">
                    <span class="Link">Home</span>
                    <span class="Link"><a href="resources.html">Resources</a></span>
                    <span class="Link"><a href="#feature">About</a></span>
                    <span class="Link"><a href="#contact">Contact</a></span>
                  </div>
                </div>
                <div class="home-right">
                  <span class="home-sign-in Link"><a href="login.html">Login&nbsp;</a></span>
                  <div class="home-get-started">
                    <span class="home-text08"><a href="signup.html">Sign Up</a></span>
                  </div>
                  <div id="open-mobile-menu" class="home-burger-menu">
                    <img
                      alt="pastedImage"
                      src="public/pastedimage-yxbd.svg"
                      class="home-mobile-menu-button"
                    />
                  </div>
                </div>
              </nav>
            </div>
            <div>
              <div class="home-container02">
                <script defer="">
                  /*
                  Mobile menu - Code Embed
                  */

                  // Mobile menu
                  const mobileMenu = document.querySelector('#mobile-menu')

                  // Buttons
                  const closeButton = document.querySelector('#close-mobile-menu')
                  const openButton = document.querySelector('#open-mobile-menu')

                  // On openButton click, set the mobileMenu position left to -100vw
                  openButton.addEventListener('click', function() {
                      mobileMenu.style.transform = 'translateX(0%)'
                  })

                  // On closeButton click, set the mobileMenu position to 0vw
                  closeButton.addEventListener('click', function() {
                      mobileMenu.style.transform = 'translateX(100%)'
                  })
                </script>
              </div>
            </div>
          </div>
          <header class="home-header">
            <h1 class="home-text09">EMPOWERING FINANCIAL LITERACY</h1>
            <p class="home-text10">
              Financial literacy is the understanding and ability to manage
              various financial concepts such as budgeting, saving, investing,
              and debt management.
            </p>
            <div class="home-get-started1">
              <span class="home-text11"><a href="signup.html">Get started</a></span>
            </div>
          </header>
          <div class="home-dashboard-preview">
            <div class="home-outline">
              <img
                alt="pastedImage"
                src="https://images.unsplash.com/photo-1635236198091-33d5aa8466cc?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDI1fHx0cmFkaW5nfGVufDB8fHx8MTcxNTM0NzEwNXww&amp;ixlib=rb-4.0.3&amp;w=1400"
                loading="lazy"
                class="home-image"
              />
            </div>
          </div>
        </section>
        <section id="feature" class="home-features">
          <div class="home-title">
            <span class="home-text12">Let's grow your experience&nbsp;</span>
            <span class="home-text13">
              Trading is the art of capitalizing on market movements to generate
              profit within a dynamic financial landscape.
            </span>
          </div>
          <div class="home-cards">
            <div class="home-container03">
              <div class="card">
                <img
                  alt="pastedImage"
                  src="public/pastedimage-hcn5-200w.png"
                  class="home-pasted-image"
                />
                <div class="home-container04">
                  <span class="home-text14">Paper trading</span>
                </div>
                <span class="home-text15">
                  A trading process where individuals practice buying and
                  selling financial instruments without risking real money.
                </span>
              </div>
              <div class="home-publish card">
                <img
                  alt="pastedImage"
                  src="public/pastedimage-gmfn-200h.png"
                  class="home-pasted-image1"
                />
                <span class="home-text16">Expense Tracking</span>
                <span class="home-text17">
                  Expense tracking is the systematic monitoring and recording of
                  all financial expenditures.
                </span>
              </div>
            </div>
            <div class="home-container05">
              <div class="card home-analyze">
                <img
                  alt="pastedImage"
                  src="public/pastedimage-qrj-200h.png"
                  class="home-pasted-image2"
                />
                <span class="home-text18">Budget Calculator</span>
                <span class="home-text19">
                  it is a tool that helps individuals plan and manage their
                  finances by estimating income and allocating it to various
                  expenses and savings categories.
                </span>
              </div>
              <div class="home-get-leads card">
                <img
                  alt="pastedImage"
                  src="public/pastedimage-pgzo-200h.png"
                  class="home-pasted-image3"
                />
                <span class="home-text20">Investment Analysis&nbsp;</span>
                <span class="home-text21">
                  It involves evaluating the potential risks and returns of
                  various investment opportunities to make informed decisions.
                </span>
              </div>
            </div>
          </div>
        </section>
        <section class="home-quote-container">
          <div class="home-quote">
            <span class="home-message">
              <span class="home-text22">
                "The only way to permanently change the temperature in the room
                is to reset the thermostat. In the same way, the only way to
                change your level of financial success 'permanently' is to reset
                your financial thermostat."
              </span>
              <br />
              <span>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;- T. Harv Eker
              </span>
              <br />
            </span>
            <div class="home-author"></div>
          </div>
        </section>
        <section class="home-banners">
          <div class="home-banner-manage">
            <div class="home-container06">
              <div class="home-left1"></div>
              <span class="home-text26 title">
                "Managing finance literacy involves empowering individuals to
                make informed decisions about their money through education and
                practical application."
              </span>
              <div class="home-image-container"></div>
            </div>
            <img
              src="https://images.unsplash.com/photo-1629339942248-45d4b10c8c2f?ixid=M3w5MTMyMXwwfDF8c2VhcmNofDEzfHx0cmFkaW5nfGVufDB8fHx8MTcxNTM0NzA5MXww&amp;ixlib=rb-4.0.3&amp;w=400"
              alt="image"
              class="home-image1"
            />
          </div>
          <div class="home-banner-advanced-analytics">
            <div class="home-centered-container">
              <div class="home-image-container1">
                <img
                  alt="pastedImage"
                  src="public/test-1200w.png"
                  class="home-cards-image"
                />
              </div>
              <div class="home-right1">
                <h2 class="home-text27 title">
                  Advanced analytics, easy to understand.
                </h2>
                <div class="home-category">
                  <span class="home-text28">Budgeting Skills</span>
                  <span class="home-text29">
                    <span>
                      "Offer financial education programs, accessible resources,
                      and personalized coaching. Incorporate behavioral
                      strategies and peer support networks to help individuals
                      develop effective budgeting skills and improve financial
                      literacy."
                    </span>
                    <br />
                  </span>
                </div>
                <div class="home-category1">
                  <span class="home-text32">Debt Management</span>
                  <span class="home-text33">
                    "Provide financial literacy education on debt management,
                    including understanding interest rates and minimum payments.
                    Offer debt counseling services and encourage proactive debt
                    repayment strategies."
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="home-banner">
            <div class="home-container07">
              <div class="home-left2">
                <h2 class="home-text34 title">
                  Powerful scheduler that saves your time
                </h2>
                <span class="home-text35">
                  include improved money management skills, better
                  decision-making regarding investments and savings, reduced
                  financial stress, increased wealth accumulation, and enhanced
                  long-term financial security.
                </span>
                <div class="home-get-started2 template-button">
                  <span class="home-text36"><a href="signup.html">Get started</a></span>
                </div>
              </div>
              <div class="home-image-container2">
                <img
                  alt="pastedImage"
                  src="public/83d913a38a75e38d7cef4fea757ed7ed-1200w.png"
                  class="home-cards-image1"
                />
              </div>
            </div>
          </div>
        </section>
        <section class="home-integrations">
          <div class="home-centered-container1">
            <div class="home-heading">
              <span class="title">
                Integrated with the tools you know and love
              </span>
            </div>
            <div class="home-pills-container">
              <div class="home-pills">
                <div class="home-container08">
                  <a href="https://www.youtube.com/@fineduhub36" target="_blank">
                  <div class="you-tube-you-tube">
                    <img
                      alt="pastedImage"
                      src="public/logos/pastedimage-smjb.svg"
                      class="you-tube-pasted-image"
                    />
                  </div>
                  </a>
                  <a href="#" target="_blank">
                  <div class="you-tube-you-tube">
                    <img
                      alt="pastedImage"
                      src="public/logos/group%201012-200h.png"
                      class="you-tube-pasted-image"
                    />
                  </div>
                </a>
                <a href="#" target="_blank">
                  <div class="you-tube-you-tube">
                    <img
                      alt="pastedImage"
                      src="public/logos/layer1-200h.png"
                      class="you-tube-pasted-image"
                    />
                  </div>
                </a>
                </div>
                <div class="home-container09"></div>
              </div>
            </div>
          </div>
        </section>
        <section class="home-faq">
          <div class="home-heading1">
            <span class="home-text38 title">Frequently asked questions</span>
          </div>
          <div class="home-accordion">
            <div data-faq="closed" class="accordionContainer">
              <div class="home-header1">
                <span class="home-text39">
                  <span>-- what is financial literacy ?</span>
                  <br />
                  <span></span>
                </span>
                <svg viewBox="0 0 1024 1024" class="accordionIcon">
                  <path
                    d="M316 366l196 196 196-196 60 60-256 256-256-256z"
                  ></path>
                </svg>
              </div>
              <div class="accordionContent">
                <span class="home-text43">
                  Financial literacy refers to the knowledge and understanding
                  of various financial concepts and tools that individuals need
                  to make informed decisions about their personal finances. It
                  encompasses skills such as budgeting, saving, investing,
                  borrowing, and managing debt effectively. Financially literate
                  individuals are equipped to navigate the complexities of the
                  financial world, make sound financial decisions, and work
                  towards achieving their financial goals.
                </span>
              </div>
            </div>
            <div class="accordionContainer">
              <div class="home-header2">
                <span class="home-text44">
                  <span>
                    --What are the key components of a personal budget, and how
                    can I create one?
                  </span>
                  <br class="home-text46" />
                  <br />
                </span>
                <svg viewBox="0 0 1024 1024" class="accordionIcon">
                  <path
                    d="M316 366l196 196 196-196 60 60-256 256-256-256z"
                  ></path>
                </svg>
              </div>
              <div class="accordionContent">
                <span class="home-text48">
                  The key components of a personal budget typically include
                  income, expenses, savings, and financial goals. To create one,
                  start by listing all sources of income, then categorize and
                  track expenses, prioritize savings goals, and adjust as needed
                  to align with financial objectives.
                </span>
              </div>
            </div>
            <div data-faq="closed" class="accordionContainer">
              <div class="home-header3">
                <span class="home-text49">
                  <span>
                    --What are the different types of investment vehicles
                    available, and how do I choose the right ones for my
                    financial goals?
                  </span>
                  <br />
                  <span></span>
                </span>
                <svg viewBox="0 0 1024 1024" class="accordionIcon">
                  <path
                    d="M316 366l196 196 196-196 60 60-256 256-256-256z"
                  ></path>
                </svg>
              </div>
              <div class="accordionContent">
                <span class="home-text53">
                  The different types of investment vehicles include stocks,
                  bonds, mutual funds, exchange-traded funds (ETFs), real
                  estate, and alternative investments like commodities or
                  cryptocurrencies. Choosing the right ones for your financial
                  goals involves assessing factors such as risk tolerance,
                  investment time horizon, desired returns, and diversification
                </span>
              </div>
            </div>
            <div class="home-container10">
              <div data-faq="closed" class="accordionContainer">
                <div class="home-header4">
                  <span class="home-text54">
                    <span>
                      --How can I effectively manage and reduce my debt, such as
                      credit card debt or student loans
                    </span>
                    <br />
                    <span></span>
                  </span>
                  <svg viewBox="0 0 1024 1024" class="accordionIcon">
                    <path
                      d="M316 366l196 196 196-196 60 60-256 256-256-256z"
                    ></path>
                  </svg>
                </div>
                <div class="home-content3 accordionContent">Effectively managing and reducing debt involves creating a
                  budget to track income and expenses, prioritizing
                  high-interest debts for repayment, negotiating with creditors
                  for lower rates or payment plans, and seeking additional
                  income sources to accelerate debt reduction while practicing
                  financial discipline to avoid accumulating further debt.</div>
              </div>
                <br class="home-text60" />
          </div>
          <div>
              <script>
                // Accordion - Code Embed

                const accordionContainers = document.querySelectorAll('.accordionContainer'); // All accordion containers
                const accordionContents = document.querySelectorAll('.accordionContent'); // All accordion content
                const accordionIcons = document.querySelectorAll('.accordionIcon'); // All accordion icons

                accordionContents.forEach((accordionContent) => {
                    accordionContent.style.display = 'none'; //Hides all accordion contents
                });

                accordionContainers.forEach((accordionContainer, index) => {
                    accordionContainer.addEventListener('click', () => {
                        accordionContents.forEach((accordionContent) => {
                            accordionContent.style.display = 'none'; //Hides all accordion contents
                        });

                        accordionIcons.forEach((accordionIcon) => {
                            accordionIcon.style.transform = 'rotate(0deg)'; // Resets all icon transforms to 0deg (default)
                        });

                        if (accordionContainer.classList.contains('accordion-open')) { // Checks if this container has class 'accordion-open'
                            accordionContainer.classList.remove('accordion-open'); // Removes class 'accordion-open'
                        } else {
                            accordionContainers.forEach((accordionContainer) => {
                                accordionContainer.classList.remove('accordion-open'); // Removes class 'accordion-open' from all containers
                            });

                            accordionContainer.classList.add('accordion-open'); // Adds class 'accordion-open' to this container
                            accordionContents[index].style.display = 'flex'; // Shows accordion content
                            accordionIcons[index].style.transform = 'rotate(180deg)'; // Rotates accordion icon 180deg
                        }
                    });
                });

                /*
                Here's what the above is doing:
                    1. Selects all accordion containers, contents, and icons
                    2. Hides all accordion contents
                    3. Adds an event listener to each accordion container
                    4. When an accordion container is clicked, it:
                        - Hides all accordion contents
                        - Resets all icon transforms to 0deg (default)
                        - Checks if this container has class 'accordion-open'
                            - If it does, it removes class 'accordion-open'
                            - If it doesn't, it:
                                - Removes class 'accordion-open' from all containers
                                - Adds class 'accordion-open' to this container
                                - Shows accordion content
                                - Rotates accordion icon 180deg
                */
              </script>
            </div>
          </div>
          <div class="home-header5"></div>
        </section>
        <footer class="home-footer">
          <div class="home-top">
            <div class="home-left3">
              <span class="home-text68">Subscribe to our member</span>
              <div class="home-subscription">
                <input
                  type="email"
                  placeholder="Enter your email"
                  class="home-textinput input"
                />
                <div class="home-subscribe">
                  <span class="home-text69">Subscribe</span>
                </div>
              </div>
              <span class="home-text70">
                By subscribing to our member you agree with our Terms and
                Conditions.
              </span>
              <div id="contact" class="home-contact">
                <span class="home-text71">Contact</span>
                <a
                  href="mailto:use@active-app.com?subject=Support"
                  class="home-link"
                >
                  fineduhub@gmail.com
                </a>
              </div>
            </div>
            <div class="home-right2">
              <div class="home-category2">
                <span class="home-text72"><a href="#">FinEdu Hub</a></span>
                <div class="home-links2">
                  <span class="home-text73"><a href="#">Home</a></span>
                  <span class="home-text74"><a href="#">Resources</a></span>
                  <span class="home-text75"><a href="#">About</a></span>
                  <span class="home-text76"><a href="#">Contact</a></span>
                  <span class="home-text77"><a href="login.html">Login</a></span>
                </div>
              </div>
              <div class="home-category3">
                <span class="home-text79">Solutions</span>
                <div class="home-links3">
                  <span class="home-text80"><a href="">Youtub</a></span>
                  <span class="home-text81"><a href="">Instagram</a></span>
                  <span class="home-text82"><a href="">LinkedIn</a></span>
                </div>
              </div>
            </div>
          </div>
          <span class="home-text85">FinEduHub</span>
          <div class="home-bottom" style = "color: white;">FinEduHub | Copyright&copy; 2024</div>
        </footer>
      </div>
    </div>
  </body>
</html>
