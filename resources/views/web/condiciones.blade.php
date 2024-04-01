<!DOCTYPE html><html lang="es"> <head><meta charset="UTF-8"><meta name="viewport" content="width=device-width"><link rel="icon" type="image/svg+xml" href="/favicon-yapefy.svg"><meta name="generator" content="Astro v4.2.4"><meta content="Yapefy Web para pymes"><title>Condiciones</title><link rel="stylesheet" href="/_astro/condiciones.VVXX9w0E.css" /></head> <body class="antialiased"> <style>astro-island,astro-slot,astro-static-slot{display:contents}</style><script>(()=>{var e=async t=>{await(await t())()};(self.Astro||(self.Astro={})).load=e;window.dispatchEvent(new Event("astro:load"));})();;(()=>{var b=Object.defineProperty;var f=(c,o,i)=>o in c?b(c,o,{enumerable:!0,configurable:!0,writable:!0,value:i}):c[o]=i;var l=(c,o,i)=>(f(c,typeof o!="symbol"?o+"":o,i),i);var p;{let c={0:t=>m(t),1:t=>i(t),2:t=>new RegExp(t),3:t=>new Date(t),4:t=>new Map(i(t)),5:t=>new Set(i(t)),6:t=>BigInt(t),7:t=>new URL(t),8:t=>new Uint8Array(t),9:t=>new Uint16Array(t),10:t=>new Uint32Array(t)},o=t=>{let[e,r]=t;return e in c?c[e](r):void 0},i=t=>t.map(o),m=t=>typeof t!="object"||t===null?t:Object.fromEntries(Object.entries(t).map(([e,r])=>[e,o(r)]));customElements.get("astro-island")||customElements.define("astro-island",(p=class extends HTMLElement{constructor(){super(...arguments);l(this,"Component");l(this,"hydrator");l(this,"hydrate",async()=>{var d;if(!this.hydrator||!this.isConnected)return;let e=(d=this.parentElement)==null?void 0:d.closest("astro-island[ssr]");if(e){e.addEventListener("astro:hydrate",this.hydrate,{once:!0});return}let r=this.querySelectorAll("astro-slot"),a={},h=this.querySelectorAll("template[data-astro-template]");for(let n of h){let s=n.closest(this.tagName);s!=null&&s.isSameNode(this)&&(a[n.getAttribute("data-astro-template")||"default"]=n.innerHTML,n.remove())}for(let n of r){let s=n.closest(this.tagName);s!=null&&s.isSameNode(this)&&(a[n.getAttribute("name")||"default"]=n.innerHTML)}let u;try{u=this.hasAttribute("props")?m(JSON.parse(this.getAttribute("props"))):{}}catch(n){let s=this.getAttribute("component-url")||"<unknown>",y=this.getAttribute("component-export");throw y&&(s+=` (export ${y})`),console.error(`[hydrate] Error parsing props for component ${s}`,this.getAttribute("props"),n),n}await this.hydrator(this)(this.Component,u,a,{client:this.getAttribute("client")}),this.removeAttribute("ssr"),this.dispatchEvent(new CustomEvent("astro:hydrate"))});l(this,"unmount",()=>{this.isConnected||this.dispatchEvent(new CustomEvent("astro:unmount"))})}disconnectedCallback(){document.removeEventListener("astro:after-swap",this.unmount),document.addEventListener("astro:after-swap",this.unmount,{once:!0})}connectedCallback(){if(!this.hasAttribute("await-children")||document.readyState==="interactive"||document.readyState==="complete")this.childrenConnectedCallback();else{let e=()=>{document.removeEventListener("DOMContentLoaded",e),r.disconnect(),this.childrenConnectedCallback()},r=new MutationObserver(()=>{var a;((a=this.lastChild)==null?void 0:a.nodeType)===Node.COMMENT_NODE&&this.lastChild.nodeValue==="astro:end"&&(this.lastChild.remove(),e())});r.observe(this,{childList:!0}),document.addEventListener("DOMContentLoaded",e)}}async childrenConnectedCallback(){let e=this.getAttribute("before-hydration-url");e&&await import(e),this.start()}start(){let e=JSON.parse(this.getAttribute("opts")),r=this.getAttribute("client");if(Astro[r]===void 0){window.addEventListener(`astro:${r}`,()=>this.start(),{once:!0});return}Astro[r](async()=>{let a=this.getAttribute("renderer-url"),[h,{default:u}]=await Promise.all([import(this.getAttribute("component-url")),a?import(a):()=>()=>{}]),d=this.getAttribute("component-export")||"default";if(!d.includes("."))this.Component=h[d];else{this.Component=h;for(let n of d.split("."))this.Component=this.Component[n]}return this.hydrator=u,this.hydrate},e,this)}attributeChangedCallback(){this.hydrate()}},l(p,"observedAttributes",["props"]),p))}})();</script><astro-island uid="Z1w7n4p" prefix="r0" component-url="/_astro/Navbar.Q93Dt_CW.js" component-export="Navbar" renderer-url="/_astro/client.2wOxL1Aq.js" props="{}" ssr="" client="load" opts="{&quot;name&quot;:&quot;Navbar&quot;,&quot;value&quot;:true}" await-children=""><nav class="w-full h-20 flex flex-col justify-center items-center fixed bg-customDarkBg1 lg:bg-customDarkBgTransparent z-40 lg:backdrop-blur-xl"><div class="2xl:w-[1280px] xl:w-10/12 w-11/12 flex justify-between items-center relative"><a class="navbar-link" href="#inicio" aria-label="Inicio"><div class="flex justify-start items-center grow basis-0"><div class="text-white mr-2 text-6xl"><svg xmlns="http://www.w3.org/2000/svg" id="Logo" viewBox="0 0 648 648.1" class="w-10"><defs><linearGradient id="Degradado_sin_nombre" x1="35.911" x2="612.089" y1="612.139" y2="35.961" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6f0383"></stop><stop offset="1" stop-color="#a221af"></stop></linearGradient></defs><rect id="Fondo_radius2" width="648" height="648" data-name="Fondo radius2" rx="122.692" style="fill:url(#Degradado_sin_nombre)"></rect><g id="LogoGrande"><path d="M235.619 143.872a8.417 8.417 0 0 1-2.888-5.38 50.892 50.892 0 0 1 41.603-52.365 7.755 7.755 0 0 1 5.906 1.443 8.63 8.63 0 0 1 2.231 3.019 7.482 7.482 0 0 1-4.068 9.712 50.99 50.99 0 0 0-30.973 39.109 7.226 7.226 0 0 1-11.811 4.462ZM412.53 143.872a6.778 6.778 0 0 0 2.886-5.38c1.313-25.461-17.586-47.903-43.834-52.365a8.4 8.4 0 0 0-6.168 1.443 7.2 7.2 0 0 0 2.1 12.6 51.656 51.656 0 0 1 32.547 39.109 7.735 7.735 0 0 0 12.468 4.593ZM338.248 258.706a3.684 3.684 0 0 1 2.362 4.594c-2.231 6.3-8.53 8.924-16.274 8.924-7.612 0-14.042-2.625-16.142-8.924a2.89 2.89 0 0 1-.131-1.05 3.62 3.62 0 0 1 3.806-3.675h25.329a1.053 1.053 0 0 1 1.05.131ZM407.148 243.483a10.083 10.083 0 0 1-9.974 10.105H251.761a10.204 10.204 0 0 1-6.037-18.373c6.824-4.856 19.292-17.062 19.292-42.26V165.92c0-27.56 17.061-51.708 42.26-59.451 0 0 3.936-15.88 16.93-15.88s16.929 15.88 16.929 15.88c25.198 7.874 42.259 32.022 42.259 59.451v27.036c0 25.197 12.468 37.534 19.292 42.259a9.724 9.724 0 0 1 4.462 8.268Zm-83.074-30.054a15.902 15.902 0 0 0 6.693-13.387 19.006 19.006 0 0 0-2.231-9.186 20.66 20.66 0 0 0-6.956-6.956c-3.15-2.1-7.48-3.806-12.861-5.38-5.25-1.576-9.187-3.15-11.418-4.857a7.672 7.672 0 0 1-3.543-6.168 8.371 8.371 0 0 1 3.15-6.956 15.15 15.15 0 0 1 9.055-2.493c4.33 0 7.48.919 9.711 3.018a9.827 9.827 0 0 1 3.281 7.219 4.075 4.075 0 0 0 2.363 3.543c3.28 1.575 8.53.919 9.318-2.1a2.233 2.233 0 0 0 .131-.919 17.793 17.793 0 0 0-3.15-10.236 20.719 20.719 0 0 0-8.662-7.48 30.038 30.038 0 0 0-12.599-2.626c-7.218 0-12.992 1.707-17.454 5.25a16.668 16.668 0 0 0-6.825 13.649c0 6.3 3.15 11.286 9.318 15.224 3.281 2.1 7.612 3.806 13.124 5.512s9.318 3.28 11.418 4.855a8.205 8.205 0 0 1 3.15 6.956 8.02 8.02 0 0 1-3.15 6.693c-2.1 1.575-5.25 2.494-9.318 2.494q-7.087 0-11.024-3.15c-2.625-2.1-3.544-5.25-3.806-8.924-1.05-6.693-11.812-6.3-11.812 0s1.05 8.005 3.544 11.286a24.017 24.017 0 0 0 9.712 7.612 34.629 34.629 0 0 0 13.648 2.625c6.956-.131 12.862-1.837 17.193-5.118Zm48.952-56.696a4.175 4.175 0 0 0-2.231-4.855 4.078 4.078 0 0 0-5.512 2.1l-31.235 58.926a4.175 4.175 0 0 0 2.231 4.856 4.078 4.078 0 0 0 5.512-2.1l31.235-58.927Z" style="fill:#00e2c5"></path><g id="Yapefy"><path id="y" d="M155.694 496.068C149 515.885 127.87 558.276 98.867 561.95a20.69 20.69 0 0 1-10.499-2.1c-21.392-12.205-16.142-35.434-5.118-53.808a111.164 111.164 0 0 1 55.908-46.196c25.591-9.843 346.865-56.695 419.572-63.388 5.25-.525 10.105-.263 13.123 3.937a17.918 17.918 0 0 1 2.494 8.268 7.135 7.135 0 0 1-6.693 6.955c-30.185 3.544-372.457 49.084-430.727 68.507-11.418 1.444-43.178 31.498-44.49 50.79a6.465 6.465 0 0 0 5.905 6.956 7.113 7.113 0 0 0 4.331-1.05c9.843-6.825 22.048-25.986 25.592-34.779 9.843-17.586 25.198-74.937 28.741-86.486-8.399 9.186-18.636 19.423-31.497 13.649-20.998-9.45 2.887-66.276 2.887-66.276s3.806-11.68 2.625-14.043c-1.706-3.806-.525-7.874 2.362-8.005 6.693-.657 21.655-.92 14.043 19.817-5.118 13.649-6.956 17.454-9.318 31.76-3.15 19.292 7.218 16.01 16.011 5.905 3.675-4.33 8.53-14.042 10.63-19.292 5.644-14.699 9.975-27.691 13.912-41.078 2.1-6.955 14.567-11.811 20.604-10.893a2.906 2.906 0 0 1 2.363 1.838 7.374 7.374 0 0 1 .13 4.462c-9.71 28.348-36.352 129.533-46.064 158.668Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="a" d="M268.56 332.807c-3.281 18.242-7.219 30.71-10.106 49.214-3.543 22.31 2.362 22.31 16.011 2.625 1.575-3.543 6.956 3.019 6.169 7.743-1.444 8.4-6.431 15.093-11.287 20.08-3.15 2.1-22.048 22.442-31.76-1.575-4.593 10.237-11.549 16.798-24.017 16.667-14.83-.262-19.16-20.473-17.454-35.566 1.837-15.486 8.924-34.515 16.01-46.983 3.807-6.825 9.45-13.124 15.356-16.405 8.005-4.593 17.586-4.462 23.098 3.675.656-2.232 2.23-8.662 5.512-8.662 7.743-1.05 12.336 1.443 12.468 9.187Zm-41.472 20.473c-6.3 9.712-17.717 33.99-8.006 47.246a6.039 6.039 0 0 0 6.825 2.231c4.462-1.575 7.743-6.956 10.237-13.386 3.15-7.875 12.074-32.154 10.63-41.472a4.412 4.412 0 0 0-4.462-3.806c-5.512.131-12.468 4.987-15.224 9.187Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="p" d="M282.865 323.095a3.238 3.238 0 0 1 2.493-2.494c3.806-.918 9.187-1.575 12.993 2.231.787.788.525 1.575.262 3.544l-.787 4.856c5.512-8.268 12.074-18.374 27.691-15.093 10.893 3.937 12.6 23.623 11.418 37.403-3.15 21.655-11.024 52.365-27.166 61.027a25.624 25.624 0 0 1-28.217-5.644c-2.23 20.08-6.824 39.897-9.843 56.302-.787 4.33-5.905 7.087-9.055 7.48-5.118-.918-6.956-3.28-6.168-9.974 4.855-38.321 14.83-83.336 22.31-121.002.919-4.069 3.019-14.305 4.069-18.636Zm24.148 67.457c8.662-15.224 19.292-55.12 3.543-53.152-9.843 1.05-19.686 35.303-22.573 53.546-.656 4.068 2.494 7.218 6.824 7.218 3.019 0 8.531-1.444 12.206-7.612Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="e" d="M396.65 372.835c2.493 2.1 4.461 7.874 4.593 11.68a6.64 6.64 0 0 1-1.444 4.33 79.366 79.366 0 0 1-22.967 19.818c-19.292 8.268-32.547 6.168-37.666-13.912-2.624-10.892 2.231-34.91 5.644-47.246a19.192 19.192 0 0 1 1.574-4.33c7.612-16.012 15.618-30.186 29.923-34.91 20.473-6.825 29.529 6.168 27.56 21.26-2.887 19.686-24.542 38.454-43.177 40.16-11.025 40.553 27.035 12.468 31.497 3.543a3.776 3.776 0 0 1 4.462-.393Zm-10.5-46.197a5.526 5.526 0 0 0-3.281-2.23 4.564 4.564 0 0 0-3.15.787c-5.118 3.28-13.649 18.373-14.83 25.198-.131.262.132.656.525.787h.132c9.974-.262 22.441-12.468 21.392-23.098a4.7 4.7 0 0 0-.788-1.444Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="y-2" d="M473.293 440.291c-13.78 7.219-37.797 32.154-38.978 48.69a6.465 6.465 0 0 0 5.906 6.956 7.113 7.113 0 0 0 4.33-1.05c9.843-6.824 22.049-25.985 25.592-34.778 9.843-17.586 25.33-74.807 29.004-86.487-8.4 9.187-18.636 19.423-31.497 13.649-20.999-9.45 2.887-66.276 2.887-66.276s3.806-11.68 2.625-14.043c-1.707-3.806-.525-7.874 2.362-8.005 6.693-.656 21.654-.919 14.042 19.817-5.118 13.649-6.955 17.455-9.318 31.76-3.28 20.998 9.187 15.224 18.374 3.018 3.281-4.462 5.118-9.843 7.087-15.092 5.25-13.912 10.499-29.135 15.224-42.784 2.493-6.956 14.567-11.812 20.604-10.893a2.906 2.906 0 0 1 2.363 1.837 7.374 7.374 0 0 1 .13 4.462C533.795 319.814 507.154 421 497.31 450.266c-6.694 19.817-27.823 62.207-56.827 65.882a20.69 20.69 0 0 1-10.5-2.1c-21.391-12.205-16.142-35.435-5.117-53.808a109.594 109.594 0 0 1 53.545-45.278 8.065 8.065 0 0 1 6.3.132c3.937 2.1 3.806 6.824.13 13.648a27.982 27.982 0 0 1-11.548 11.55Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="f" d="M422.24 331.757a.48.48 0 0 0-.262-.657h-.262c-1.706.132-3.806.525-5.512.788-3.806-1.05-4.462-6.3-3.937-9.187.262-2.362 1.837-7.48 4.855-8.662a13.843 13.843 0 0 1 2.494-.656c2.1-.262 3.937-.525 6.168-.656.131 0 .131 0 .131-.131 2.1-8.53 4.594-23.623 8.662-31.235 5.512-9.974 14.568-17.586 25.986-19.03a19.501 19.501 0 0 1 6.168.263c9.055 1.837 15.486 11.286 14.567 20.08a4.32 4.32 0 0 1-3.805 3.674 16.951 16.951 0 0 1-4.463-.131 10.442 10.442 0 0 1-3.28-1.444 20.174 20.174 0 0 1-2.232-2.494 6 6 0 0 0-2.624-1.837 11.074 11.074 0 0 0-5.119-.787 12.457 12.457 0 0 0-8.53 4.462 14.828 14.828 0 0 0-2.888 5.512c-1.837 6.168-3.15 15.092-4.462 21.392 0 .131 0 .131.131.131 3.938-.262 7.744-.656 11.68-.919 4.725-.262 6.3 12.337 3.15 15.88a6.305 6.305 0 0 1-3.28 1.838c-4.594.262-9.056.525-13.387.918a1.551 1.551 0 0 0-1.444 1.444c-.787 5.643-6.955 62.207-7.48 66.013-.919 6.956-19.161 5.512-17.849-2.23Z" style="stroke:#fff;stroke-miterlimit:10;stroke-width:2;fill:#fff" transform="translate(0 .05)"></path></g></g></svg></div><div class="text-white font-bold text-xl">Yapefy Web</div></div></a><div class="hidden lg:flex h-full pl-12 pb-2"><a class="navbar-link" href="../#inicio" aria-label="Inicio">Inicio</a><a class="navbar-link" href="../#funcionalidades" aria-label="Funcionalidades">Funcionalidades</a><a class="navbar-link" href="../#informacion" aria-label="Información">Información</a></div><div class="lg:hidden flex flex-col  px-2 py-3 border-solid border border-gray-600 rounded-md cursor-pointer hover:bg-customDarkBg2"><div class="w-5 h-0.5 bg-gray-500  mb-1"></div><div class="w-5 h-0.5 bg-gray-500  mb-1"></div><div class="w-5 h-0.5 bg-gray-500 "></div></div></div></nav><div class="h-20"></div><!--astro:end--></astro-island>  <astro-island uid="Za6zNl" prefix="r23" component-url="/_astro/Btag.Wx2wlb0c.js" component-export="BtArticle" renderer-url="/_astro/client.2wOxL1Aq.js" props="{}" ssr="" client="load" opts="{&quot;name&quot;:&quot;BtArticle&quot;,&quot;value&quot;:true}" await-children=""><article class="py-6 lg:py-10 px-5 sm:px-10 text-slate-200 max-w-5xl m-auto"><astro-slot> <h1 class="text-4xl sm:text-5xl text-center  pb-2 pt-3 font-bold">Términos y condiciones</h1> <br> <p class="text-base pb-6 text-gray-300">
Al utilizar YapefyWeb, usted acepta los siguientes términos y condiciones:
</p> <section class="pl-5"> <ol class=" text-left list-decimal pb-2"> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Uso de la aplicación:</span><br/>
Usted se compromete a utilizar YapefyWeb de una manera que cumpla con todas
          las leyes y regulaciones locales, estatales, nacionales e internacionales
          aplicables.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Subida de datos:</span><br/>
Usted tiene la responsabilidad de todos los datos de transacciones que
          suba a YapefyWeb. Asegúrese de que tiene el derecho de subir estos datos
          y que no infringen ninguna ley ni violan los derechos de terceros.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Búsquedas, consultas y filtrados:</span><br/>
Usted tiene permiso para realizar búsquedas, consultas y filtrados en los
          datos que ha subido a YapefyWeb. Sin embargo, no tiene permiso para acceder,
          buscar, consultar o filtrar los datos de otros usuarios sin su permiso
          explícito.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Seguridad:</span><br/>
Usted es responsable de proteger su cuenta y su contraseña. No debe compartir
          estos detalles con nadie. YapefyWeb no se hace responsable de cualquier
          pérdida o daño que pueda surgir como resultado de su falta de protección
          de los detalles de su cuenta.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Terminación:</span><br/>
YapefyWeb se reserva el derecho de suspender o terminar su cuenta y su
          acceso a la aplicación si incumple estos términos y condiciones.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Privacidad:</span><br/>
Usted acepta que YapefyWeb puede recopilar y utilizar sus datos personales
          de acuerdo con su Política de Privacidad.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">Propiedad Intelectual:</span><br/>
Todo el contenido de YapefyWeb, incluyendo texto, gráficos, logos, iconos,
          imágenes, clips de audio y software, es propiedad de YapefyWeb o sus proveedores
          de contenido y está protegido por las leyes internacionales de derechos
          de autor.
</li> <li class="text-base pb-3 text-gray-200"> <span class="text-base text-slate-200 font-bold">
Modificaciones a los Términos y Condiciones:
</span><br/>
YapefyWeb se reserva el derecho a cambiar estos términos y condiciones
          en cualquier momento. Es su responsabilidad revisar estos términos y condiciones
          regularmente para mantenerse informado de cualquier cambio.
</li> </ol> </section> <p class="text-base pb-6 text-gray-300">
Al continuar usando YapefyWeb, usted acepta estos términos y condiciones.
</p> </astro-slot></article><!--astro:end--></astro-island>   <footer><div class="pt-10  lg:pt-20 lg:pb-12 bg-customDarkBg1 transform-gpu"><div class="container mx-auto px-4 w-4/5 md:w-11/12 lg:w-10/12 xl:w-4/5 2xl:w-2/3"><div class="flex flex-wrap"><div class="w-full lg:w-1/3 mb-10 lg:mb-0"><div class="flex justify-center lg:justify-start items-center grow basis-0"><div class="text-white mr-2 text-6xl"><svg xmlns="http://www.w3.org/2000/svg" id="Logo" viewBox="0 0 648 648.1" class="w-10"><defs><linearGradient id="Degradado_sin_nombre" x1="35.911" x2="612.089" y1="612.139" y2="35.961" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6f0383"></stop><stop offset="1" stop-color="#a221af"></stop></linearGradient></defs><rect id="Fondo_radius2" width="648" height="648" data-name="Fondo radius2" rx="122.692" style="fill:url(#Degradado_sin_nombre)"></rect><g id="LogoGrande"><path d="M235.619 143.872a8.417 8.417 0 0 1-2.888-5.38 50.892 50.892 0 0 1 41.603-52.365 7.755 7.755 0 0 1 5.906 1.443 8.63 8.63 0 0 1 2.231 3.019 7.482 7.482 0 0 1-4.068 9.712 50.99 50.99 0 0 0-30.973 39.109 7.226 7.226 0 0 1-11.811 4.462ZM412.53 143.872a6.778 6.778 0 0 0 2.886-5.38c1.313-25.461-17.586-47.903-43.834-52.365a8.4 8.4 0 0 0-6.168 1.443 7.2 7.2 0 0 0 2.1 12.6 51.656 51.656 0 0 1 32.547 39.109 7.735 7.735 0 0 0 12.468 4.593ZM338.248 258.706a3.684 3.684 0 0 1 2.362 4.594c-2.231 6.3-8.53 8.924-16.274 8.924-7.612 0-14.042-2.625-16.142-8.924a2.89 2.89 0 0 1-.131-1.05 3.62 3.62 0 0 1 3.806-3.675h25.329a1.053 1.053 0 0 1 1.05.131ZM407.148 243.483a10.083 10.083 0 0 1-9.974 10.105H251.761a10.204 10.204 0 0 1-6.037-18.373c6.824-4.856 19.292-17.062 19.292-42.26V165.92c0-27.56 17.061-51.708 42.26-59.451 0 0 3.936-15.88 16.93-15.88s16.929 15.88 16.929 15.88c25.198 7.874 42.259 32.022 42.259 59.451v27.036c0 25.197 12.468 37.534 19.292 42.259a9.724 9.724 0 0 1 4.462 8.268Zm-83.074-30.054a15.902 15.902 0 0 0 6.693-13.387 19.006 19.006 0 0 0-2.231-9.186 20.66 20.66 0 0 0-6.956-6.956c-3.15-2.1-7.48-3.806-12.861-5.38-5.25-1.576-9.187-3.15-11.418-4.857a7.672 7.672 0 0 1-3.543-6.168 8.371 8.371 0 0 1 3.15-6.956 15.15 15.15 0 0 1 9.055-2.493c4.33 0 7.48.919 9.711 3.018a9.827 9.827 0 0 1 3.281 7.219 4.075 4.075 0 0 0 2.363 3.543c3.28 1.575 8.53.919 9.318-2.1a2.233 2.233 0 0 0 .131-.919 17.793 17.793 0 0 0-3.15-10.236 20.719 20.719 0 0 0-8.662-7.48 30.038 30.038 0 0 0-12.599-2.626c-7.218 0-12.992 1.707-17.454 5.25a16.668 16.668 0 0 0-6.825 13.649c0 6.3 3.15 11.286 9.318 15.224 3.281 2.1 7.612 3.806 13.124 5.512s9.318 3.28 11.418 4.855a8.205 8.205 0 0 1 3.15 6.956 8.02 8.02 0 0 1-3.15 6.693c-2.1 1.575-5.25 2.494-9.318 2.494q-7.087 0-11.024-3.15c-2.625-2.1-3.544-5.25-3.806-8.924-1.05-6.693-11.812-6.3-11.812 0s1.05 8.005 3.544 11.286a24.017 24.017 0 0 0 9.712 7.612 34.629 34.629 0 0 0 13.648 2.625c6.956-.131 12.862-1.837 17.193-5.118Zm48.952-56.696a4.175 4.175 0 0 0-2.231-4.855 4.078 4.078 0 0 0-5.512 2.1l-31.235 58.926a4.175 4.175 0 0 0 2.231 4.856 4.078 4.078 0 0 0 5.512-2.1l31.235-58.927Z" style="fill:#00e2c5"></path><g id="Yapefy"><path id="y" d="M155.694 496.068C149 515.885 127.87 558.276 98.867 561.95a20.69 20.69 0 0 1-10.499-2.1c-21.392-12.205-16.142-35.434-5.118-53.808a111.164 111.164 0 0 1 55.908-46.196c25.591-9.843 346.865-56.695 419.572-63.388 5.25-.525 10.105-.263 13.123 3.937a17.918 17.918 0 0 1 2.494 8.268 7.135 7.135 0 0 1-6.693 6.955c-30.185 3.544-372.457 49.084-430.727 68.507-11.418 1.444-43.178 31.498-44.49 50.79a6.465 6.465 0 0 0 5.905 6.956 7.113 7.113 0 0 0 4.331-1.05c9.843-6.825 22.048-25.986 25.592-34.779 9.843-17.586 25.198-74.937 28.741-86.486-8.399 9.186-18.636 19.423-31.497 13.649-20.998-9.45 2.887-66.276 2.887-66.276s3.806-11.68 2.625-14.043c-1.706-3.806-.525-7.874 2.362-8.005 6.693-.657 21.655-.92 14.043 19.817-5.118 13.649-6.956 17.454-9.318 31.76-3.15 19.292 7.218 16.01 16.011 5.905 3.675-4.33 8.53-14.042 10.63-19.292 5.644-14.699 9.975-27.691 13.912-41.078 2.1-6.955 14.567-11.811 20.604-10.893a2.906 2.906 0 0 1 2.363 1.838 7.374 7.374 0 0 1 .13 4.462c-9.71 28.348-36.352 129.533-46.064 158.668Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="a" d="M268.56 332.807c-3.281 18.242-7.219 30.71-10.106 49.214-3.543 22.31 2.362 22.31 16.011 2.625 1.575-3.543 6.956 3.019 6.169 7.743-1.444 8.4-6.431 15.093-11.287 20.08-3.15 2.1-22.048 22.442-31.76-1.575-4.593 10.237-11.549 16.798-24.017 16.667-14.83-.262-19.16-20.473-17.454-35.566 1.837-15.486 8.924-34.515 16.01-46.983 3.807-6.825 9.45-13.124 15.356-16.405 8.005-4.593 17.586-4.462 23.098 3.675.656-2.232 2.23-8.662 5.512-8.662 7.743-1.05 12.336 1.443 12.468 9.187Zm-41.472 20.473c-6.3 9.712-17.717 33.99-8.006 47.246a6.039 6.039 0 0 0 6.825 2.231c4.462-1.575 7.743-6.956 10.237-13.386 3.15-7.875 12.074-32.154 10.63-41.472a4.412 4.412 0 0 0-4.462-3.806c-5.512.131-12.468 4.987-15.224 9.187Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="p" d="M282.865 323.095a3.238 3.238 0 0 1 2.493-2.494c3.806-.918 9.187-1.575 12.993 2.231.787.788.525 1.575.262 3.544l-.787 4.856c5.512-8.268 12.074-18.374 27.691-15.093 10.893 3.937 12.6 23.623 11.418 37.403-3.15 21.655-11.024 52.365-27.166 61.027a25.624 25.624 0 0 1-28.217-5.644c-2.23 20.08-6.824 39.897-9.843 56.302-.787 4.33-5.905 7.087-9.055 7.48-5.118-.918-6.956-3.28-6.168-9.974 4.855-38.321 14.83-83.336 22.31-121.002.919-4.069 3.019-14.305 4.069-18.636Zm24.148 67.457c8.662-15.224 19.292-55.12 3.543-53.152-9.843 1.05-19.686 35.303-22.573 53.546-.656 4.068 2.494 7.218 6.824 7.218 3.019 0 8.531-1.444 12.206-7.612Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="e" d="M396.65 372.835c2.493 2.1 4.461 7.874 4.593 11.68a6.64 6.64 0 0 1-1.444 4.33 79.366 79.366 0 0 1-22.967 19.818c-19.292 8.268-32.547 6.168-37.666-13.912-2.624-10.892 2.231-34.91 5.644-47.246a19.192 19.192 0 0 1 1.574-4.33c7.612-16.012 15.618-30.186 29.923-34.91 20.473-6.825 29.529 6.168 27.56 21.26-2.887 19.686-24.542 38.454-43.177 40.16-11.025 40.553 27.035 12.468 31.497 3.543a3.776 3.776 0 0 1 4.462-.393Zm-10.5-46.197a5.526 5.526 0 0 0-3.281-2.23 4.564 4.564 0 0 0-3.15.787c-5.118 3.28-13.649 18.373-14.83 25.198-.131.262.132.656.525.787h.132c9.974-.262 22.441-12.468 21.392-23.098a4.7 4.7 0 0 0-.788-1.444Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="y-2" d="M473.293 440.291c-13.78 7.219-37.797 32.154-38.978 48.69a6.465 6.465 0 0 0 5.906 6.956 7.113 7.113 0 0 0 4.33-1.05c9.843-6.824 22.049-25.985 25.592-34.778 9.843-17.586 25.33-74.807 29.004-86.487-8.4 9.187-18.636 19.423-31.497 13.649-20.999-9.45 2.887-66.276 2.887-66.276s3.806-11.68 2.625-14.043c-1.707-3.806-.525-7.874 2.362-8.005 6.693-.656 21.654-.919 14.042 19.817-5.118 13.649-6.955 17.455-9.318 31.76-3.28 20.998 9.187 15.224 18.374 3.018 3.281-4.462 5.118-9.843 7.087-15.092 5.25-13.912 10.499-29.135 15.224-42.784 2.493-6.956 14.567-11.812 20.604-10.893a2.906 2.906 0 0 1 2.363 1.837 7.374 7.374 0 0 1 .13 4.462C533.795 319.814 507.154 421 497.31 450.266c-6.694 19.817-27.823 62.207-56.827 65.882a20.69 20.69 0 0 1-10.5-2.1c-21.391-12.205-16.142-35.435-5.117-53.808a109.594 109.594 0 0 1 53.545-45.278 8.065 8.065 0 0 1 6.3.132c3.937 2.1 3.806 6.824.13 13.648a27.982 27.982 0 0 1-11.548 11.55Z" style="fill:#fff" transform="translate(0 .05)"></path><path id="f" d="M422.24 331.757a.48.48 0 0 0-.262-.657h-.262c-1.706.132-3.806.525-5.512.788-3.806-1.05-4.462-6.3-3.937-9.187.262-2.362 1.837-7.48 4.855-8.662a13.843 13.843 0 0 1 2.494-.656c2.1-.262 3.937-.525 6.168-.656.131 0 .131 0 .131-.131 2.1-8.53 4.594-23.623 8.662-31.235 5.512-9.974 14.568-17.586 25.986-19.03a19.501 19.501 0 0 1 6.168.263c9.055 1.837 15.486 11.286 14.567 20.08a4.32 4.32 0 0 1-3.805 3.674 16.951 16.951 0 0 1-4.463-.131 10.442 10.442 0 0 1-3.28-1.444 20.174 20.174 0 0 1-2.232-2.494 6 6 0 0 0-2.624-1.837 11.074 11.074 0 0 0-5.119-.787 12.457 12.457 0 0 0-8.53 4.462 14.828 14.828 0 0 0-2.888 5.512c-1.837 6.168-3.15 15.092-4.462 21.392 0 .131 0 .131.131.131 3.938-.262 7.744-.656 11.68-.919 4.725-.262 6.3 12.337 3.15 15.88a6.305 6.305 0 0 1-3.28 1.838c-4.594.262-9.056.525-13.387.918a1.551 1.551 0 0 0-1.444 1.444c-.787 5.643-6.955 62.207-7.48 66.013-.919 6.956-19.161 5.512-17.849-2.23Z" style="stroke:#fff;stroke-miterlimit:10;stroke-width:2;fill:#fff" transform="translate(0 .05)"></path></g></g></svg></div><div class="text-white font-[&#x27;Inter&#x27;] font-bold text-xl">Yapefy Web</div></div><p class="mb-10 mt-4 sm:w-[22rem] lg:w-[20rem] xl:w-[24rem] text-gray-400 leading-loose text-center lg:text-left mx-auto lg:mx-0">Esta plataforma opera de manera autónoma y no está afiliada a los servicios oficiales provistos por<a href="https://www.yape.com.pe/" target="_blank" class="text-gray-100 ml-1.5 " aria-label="DarkAdmin">Yape Credicorp.</a></p><div class="w-36 mx-auto lg:mx-0"><a class="inline-block w-10  h-10 mr-2 p-2 bg-customDarkBg2 custom-border-gray  hover:bg-gray-700 rounded-xl" href="https://github.com/RNovaCoder" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="w-6 h-6 mr-3 fill-white"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></a><a class="inline-block w-10  h-10 mr-2 p-2 bg-customDarkBg2 custom-border-gray  hover:bg-gray-700 rounded-xl" href="https://www.linkedin.com/in/ricardo-daniel-villa-atanacio-30a4ba2b5/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full fill-white" viewBox="0 0 50 50"><path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path></svg></a><a class="inline-block w-10  h-10 mr-2 p-2 bg-customDarkBg2 custom-border-gray  hover:bg-gray-700 rounded-xl" href="mailto:ricardodanielvilla1@correo.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-white" viewBox="0 0 50 50"><path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path></svg></a></div></div><div class="w-full lg:w-2/3  lg:pl-16 flex flex-wrap justify-between"><div class="w-full md:w-1/3 hidden lg:block lg:w-auto mb-16 md:mb-0"><h3 class="mb-6 text-2xl font-bold text-white">Secciones</h3><ul><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="../#inicio" target="_self" aria-label="">Inicio</a></li><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="../#funcionalidades" target="_self" aria-label="">Funcionalidades</a></li><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="../#informacion" target="_self" aria-label="">Información</a></li></ul></div><div class="w-full md:w-1/3 lg:w-auto mb-5 md:mb-0"><h3 class="mb-6 text-2xl font-bold text-white">Links de Interés</h3><ul><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="/condiciones" target="_self" aria-label="">Términos y condiciones</a></li><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="/privacidad" target="_self" aria-label="">Política de privacidad</a></li><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="https://portfolio.webprized.com" target="_blank" aria-label="">Sobre el Creador</a></li></ul></div><div class="w-full md:w-1/3 lg:w-auto"><h3 class="mb-6 text-2xl font-bold text-white">Yapefy</h3><ul><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="https://play.google.com/store/apps/details?id=com.novacoder.looptransaction" target="_blank" aria-label="">Yapefy - Play Store</a></li><li class="mb-4"><a class="text-gray-400 hover:text-gray-300" href="/instrucciones" target="_self" aria-label="">Subir Datos</a></li></ul></div></div></div><p class="text-center text-sm text-gray-400 border-t border-[rgb(255,255,255,0.2)] py-6 mt-5 lg:mt-16 block">© 2024. Yapefy Web.</p></div></div></footer> </body></html>