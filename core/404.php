<style>
  * {
    transition: all 0.6s;
  }

  .card {
    height: 100%;
  }
  body {
    color: #888;
    margin: 0;
  }

  #main {
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
  }

  .fof {
    display: table-cell;
    vertical-align: middle;
  }

  .fof h1 {
    margin-top: 200px;
    margin-bottom: 200px;
    font-size: 50px;
    display: inline-block;
    padding-right: 12px;
    animation: type .5s alternate infinite;
  }

  @keyframes type {
    from {
      box-shadow: inset -3px 0px 0px #888;
    }

    to {
      box-shadow: inset -3px 0px 0px transparent;
    }
  }
</style>
<section class="section">
  <div class="section-body">
    <div class="section-body align-content-center text-lg-center">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card mt">
            <div class="fof">
              <h1>Error 404</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
