<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script> 
     <script src="https://unpkg.com/vue-cookies@1.5.12/vue-cookies.js"></script>
     
    <script>
        var app = new Vue({
    el: '#root',
    data: {
      sidebarFlag:true,
        loginFlag:false,
        mode:"/style.css",
        darkMode:false,
        contFontColor:"text-dark",
        test:'test',
        sidebarDesign:"w3-sidebar w3-light-grey w3-bar-block",
        headerDesign:"navbar navbar-expand-lg navbar-light bg-info p-3"
     

    },
    methods:{
      toggle(){ this.sidebarFlag=!this.sidebarFlag;},
         signupPop(){ this.loginFlag=!this.loginFlag},
        changeMode(){
        if(!this.darkMode){
        this.mode="/darkStyle.css";
        this.darkMode=true;
        this.contFontColor="text-muted text-decoration-none";
        this.sidebarDesign="w3-sidebar w3-dark-grey w3-bar-block";
        this.headerDesign="navbar navbar-expand-lg navbar-light bg-secondary p-3"
        }
        else{
          this.darkMode=false;
          this.mode="/style.css";
          this.contFontColor="text-dark";
          this.sidebarDesign="w3-sidebar w3-light-grey w3-bar-block";
          this.headerDesign="navbar navbar-expand-lg navbar-light bg-info p-3"
        }
    },
    changePrevent(){
      alert("works")
      this.loginFlag= true;
      ;
    }
  }
})


    </script> 