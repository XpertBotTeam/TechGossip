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
        test:'test'
     

    },
    methods:{
      toggle(){ this.sidebarFlag=!this.sidebarFlag;},
         signupPop(){ this.loginFlag=!this.loginFlag},
        changeMode(){
        if(!this.darkMode){
        this.mode="/darkStyle.css";
        this.darkMode=true;
        this.contFontColor="text-muted text-decoration-none";
        }
        else{
          this.darkMode=false;
          this.mode="/style.css";
          this.contFontColor="text-dark";
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