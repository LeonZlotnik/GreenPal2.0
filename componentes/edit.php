<section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
            Update
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>


  <section class="section is-main-section">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="card tile is-child">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-circle default"></i></span>
              Edit 
            </p>
          </header>
          <div class="card-content">
            <form>
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Name</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="text" autocomplete="on" name="name" value="John Doe" class="input" required>
                    </div>
                    <p class="help">Required. Your name</p>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">E-mail</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required>
                    </div>
                    <p class="help">Required. Your e-mail</p>
                  </div>
                </div>
              </div>
              <hr>
              <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <button type="submit" class="button is-primary">
                        Update
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>