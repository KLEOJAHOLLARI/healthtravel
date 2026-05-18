     <section class="section-cta ">
      <div class="container-form container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary center">Get a Quote</h2>
            <p class="cta-text center-text">
              Fill out the form below and our medical consultants
                  will contact you shortly with a personalized treatment
                  plan, medical recommendations, and pricing details
                  tailored to your needs.
            </p>
            <form class="cta-form" id="form" action="database/save-quote.php" method="POST">
              <div>
                <label for="name">Name</label>
                <input
                  id="name"
                  name="name"
                  type="text"
                  placeholder="John"
                  required
                />
              </div>
              <div>
                <label for="surname">Surname</label>
                <input
                  id="surname"
                  type="text"
                  placeholder="Smith"
                  required
                  name="surname"
                />
              </div>
            
              <div>
                <label for="email">Email address</label>
                <input
                id="email"
                name="email"
                type="email"
                placeholder="me@example.com"
                required
                />
              </div>
              
              <div>
                <label for="number">Number</label>
                <input
                  id="number"
                  name="number"
                  type="tel"
                  placeholder="+355 69 xxx xxxx"
                  required
                />
              </div>
                <button type="submit" class="btn btn--form">Get a quote</button>
            </form>
          </div>
        
        </div>
      </div>
    </section>