<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,minimal-ui" name="viewport">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/vue-material.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/theme/default.css">
   
    </div>

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-material"></script>
    
  <style lang="scss" scoped>
  .md-card {
    width: 320px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
  }
</style>
  </head>




  <body>
<div id="app">
      <!-- Your code 
        here -->
  
  <div>
    <md-card>
      <md-card-header>
        <div class="md-title">Card without hover effect</div>
      </md-card-header>

      <md-card-content>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque ea, nostrum odio. Dolores, sed accusantium quasi non.
      </md-card-content>

      <md-card-actions>
        <md-button>Action</md-button>
        <md-button>Action</md-button>
      </md-card-actions>
    </md-card>

    <md-card md-with-hover>
      <md-ripple>
        <md-card-header>
          <div class="md-title">Card with hover effect</div>
          <div class="md-subhead">It also have a ripple</div>
        </md-card-header>

        <md-card-content>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque ea, nostrum odio. Dolores, sed accusantium quasi non.
        </md-card-content>

        <md-card-actions>
          <md-button>Action</md-button>
          <md-button>Action</md-button>
        </md-card-actions>
      </md-ripple>
    </md-card>
  </div>


</div>

<script>
      Vue.use(VueMaterial.default)

      new Vue({
        el: '#app'
      })
    </script>


  </body>
  </html>