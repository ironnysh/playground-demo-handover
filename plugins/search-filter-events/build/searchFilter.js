(()=>{const e=document.querySelector("input[name='searchFilter']"),t=document.querySelectorAll(".wp-block-post-template li");e.addEventListener("keyup",(o=>{o=e.value.toLowerCase();for(let e of t)e.innerHTML.toLowerCase().indexOf(o)<0?e.classList.add("hidden"):e.classList.remove("hidden")}))})();