    const Toast ={
        init(){
            this.hideTimeout = null ;
            this.el=document.createElement('div');
            this.el.className='toast';
        },
        show(message,state){
            clearTimeout(this.hideTimeout);
            this.el.textContent=message;
            this.el.className='toast toast--visible show';
            
            if(state){
                this.el.classList.add(`toast--${state}`);
            }
            document.body.append(this.el);
            this.hideTimeout=setTimeout(() =>{
                this.el.style.display = 'none'
            },3000);
        }
    };
    document.addEventListener('DOMContentLoaded',() => Toast.init());
    
