 <div class="sidebar-menu">
     <div class="sidebar">
         <div class="sidebar-close-menu">
             <img src="{{ asset('assets-frontend/images/icons/close.svg') }}" alt="" />
         </div>
         <ul class="sidebar-list" id="side-menu">
             <li class="sidebar-link">
                 <a href="{{ route('user.dashboard') }}" class="d-flex align-items-center gap-2">
                     <svg width="20" height="20" viewBox="0 0 36 36" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M12.8355 20.25H7.023C6.25289 20.2544 5.51581 20.5633 4.9728 21.1094C4.42978 21.6556 4.12499 22.3944 4.125 23.1645V28.977C4.125 29.7456 4.43032 30.4827 4.9738 31.0262C5.51729 31.5697 6.2544 31.875 7.023 31.875H12.8355C13.6055 31.875 14.3442 31.5702 14.89 31.0271C15.4359 30.4841 15.7445 29.747 15.7485 28.977V23.1645C15.7485 22.3919 15.4416 21.651 14.8953 21.1047C14.349 20.5584 13.6081 20.2515 12.8355 20.2515M12.8355 4.125H7.023C6.64243 4.125 6.26558 4.19996 5.91398 4.3456C5.56238 4.49124 5.24291 4.7047 4.9738 4.9738C4.7047 5.24291 4.49124 5.56238 4.3456 5.91398C4.19996 6.26558 4.125 6.64243 4.125 7.023V12.8355C4.12499 13.6055 4.42983 14.3442 4.97289 14.89C5.51594 15.4359 6.25303 15.7445 7.023 15.7485H12.8355C13.6081 15.7485 14.349 15.4416 14.8953 14.8953C15.4416 14.349 15.7485 13.6081 15.7485 12.8355V7.023C15.7445 6.25303 15.4359 5.51594 14.89 4.97289C14.3442 4.42983 13.6055 4.12499 12.8355 4.125ZM28.977 4.125H23.1645C22.3945 4.12499 21.6558 4.42983 21.11 4.97289C20.5641 5.51594 20.2555 6.25303 20.2515 7.023V12.8355C20.2519 13.608 20.5589 14.3487 21.1051 14.8949C21.6513 15.4411 22.392 15.7481 23.1645 15.7485H28.977C29.747 15.7445 30.4841 15.4359 31.0271 14.89C31.5702 14.3442 31.875 13.6055 31.875 12.8355V7.023C31.875 6.2544 31.5697 5.51729 31.0262 4.9738C30.4827 4.43032 29.7456 4.125 28.977 4.125ZM26.0625 20.25C24.5209 20.25 23.0425 20.8624 21.9524 21.9524C20.8624 23.0425 20.25 24.5209 20.25 26.0625C20.25 27.6041 20.8624 29.0825 21.9524 30.1726C23.0425 31.2626 24.5209 31.875 26.0625 31.875C27.6041 31.875 29.0825 31.2626 30.1726 30.1726C31.2626 29.0825 31.875 27.6041 31.875 26.0625C31.875 24.5209 31.2626 23.0425 30.1726 21.9524C29.0825 20.8624 27.6041 20.25 26.0625 20.25Z"
                             stroke="#7D7D7D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                     <span key="t-dashboards">Dashboards</span>
                 </a>
             </li>
             <li class="sidebar-link">
                 <a href="{{ route('user.live-tender') }}" class="d-flex align-items-center gap-2">
                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M4.35301 4.33412C4.44359 4.24621 4.56537 4.19788 4.69158 4.19976C4.81778 4.20163 4.93808 4.25356 5.02601 4.34412C5.12214 4.44438 5.1749 4.57848 5.17284 4.71737C5.17078 4.85626 5.11407 4.98875 5.01501 5.08612C3.72187 6.39448 2.99769 8.16055 3.00001 10.0001C3.00001 11.9901 3.83001 13.7861 5.16401 15.0601C5.21552 15.1077 5.25703 15.1651 5.28612 15.2289C5.31521 15.2927 5.33129 15.3617 5.33343 15.4318C5.33557 15.5019 5.32373 15.5717 5.29859 15.6372C5.27345 15.7027 5.23551 15.7625 5.18701 15.8131C5.10098 15.902 4.98369 15.9538 4.86007 15.9575C4.73644 15.9613 4.61624 15.9166 4.52501 15.8331C3.72688 15.0858 3.0909 14.1823 2.65654 13.1789C2.22217 12.1755 1.99871 11.0935 2.00001 10.0001C2.00001 7.78612 2.90001 5.78212 4.35301 4.33412ZM14.985 5.08612C14.8861 4.98862 14.8295 4.85606 14.8277 4.71717C14.8258 4.57828 14.8787 4.44425 14.975 4.34412C15.0629 4.25386 15.183 4.20213 15.3089 4.20026C15.4349 4.19838 15.5565 4.24652 15.647 4.33412C16.3939 5.07643 16.9863 5.95931 17.3902 6.93179C17.794 7.90428 18.0013 8.94711 18 10.0001C18 12.3001 17.03 14.3741 15.475 15.8331C15.3838 15.9166 15.2636 15.9613 15.1399 15.9575C15.0163 15.9538 14.899 15.902 14.813 15.8131C14.7646 15.7625 14.7268 15.7027 14.7018 15.6374C14.6767 15.572 14.6649 15.5023 14.6671 15.4323C14.6692 15.3623 14.6853 15.2935 14.7143 15.2297C14.7433 15.166 14.7846 15.1087 14.836 15.0611C15.5209 14.4083 16.0659 13.623 16.4379 12.7529C16.8099 11.8829 17.0012 10.9463 17 10.0001C17.0024 8.16024 16.2782 6.39485 14.985 5.08612ZM6.13201 6.09012C6.22112 6.00525 6.3403 5.95925 6.46332 5.96225C6.58634 5.96525 6.70314 6.017 6.78801 6.10612C6.99601 6.31412 6.97501 6.65612 6.77001 6.86612C5.95398 7.70507 5.49822 8.82976 5.50001 10.0001C5.50001 11.2901 6.04301 12.4541 6.91401 13.2751C7.13401 13.4821 7.16401 13.8361 6.94901 14.0511C6.86659 14.1368 6.75438 14.1875 6.63561 14.1927C6.51683 14.1979 6.40061 14.1573 6.31101 14.0791C5.74016 13.5641 5.28396 12.9348 4.97197 12.2321C4.65998 11.5294 4.49919 10.769 4.50001 10.0001C4.49891 9.27268 4.64264 8.55231 4.92284 7.88101C5.20304 7.20971 5.61408 6.60091 6.13201 6.09012ZM13.23 6.86612C13.025 6.65612 13.004 6.31412 13.212 6.10612C13.2969 6.017 13.4137 5.96525 13.5367 5.96225C13.6597 5.95925 13.7789 6.00525 13.868 6.09012C14.3858 6.60101 14.7968 7.20983 15.0769 7.88111C15.3571 8.55239 15.5009 9.27271 15.5 10.0001C15.5011 10.7691 15.3405 11.5296 15.0287 12.2325C14.7169 12.9354 14.2608 13.5649 13.69 14.0801C13.6 14.1586 13.4832 14.1993 13.364 14.1937C13.2447 14.1881 13.1322 14.1367 13.05 14.0501C12.836 13.8361 12.866 13.4821 13.086 13.2751C13.5331 12.8549 13.8892 12.3475 14.1324 11.7842C14.3757 11.2209 14.5008 10.6137 14.5 10.0001C14.5018 8.82976 14.046 7.70507 13.23 6.86612ZM10 8.75012C9.66849 8.75012 9.35054 8.88181 9.11612 9.11623C8.8817 9.35065 8.75001 9.66859 8.75001 10.0001C8.75001 10.3316 8.8817 10.6496 9.11612 10.884C9.35054 11.1184 9.66849 11.2501 10 11.2501C10.3315 11.2501 10.6495 11.1184 10.8839 10.884C11.1183 10.6496 11.25 10.3316 11.25 10.0001C11.25 9.66859 11.1183 9.35065 10.8839 9.11623C10.6495 8.88181 10.3315 8.75012 10 8.75012Z"
                             fill="#7D7D7D" />
                     </svg>
                     <span key="t-dashboards">Tender List</span>
                 </a>
             </li>
             <li class="sidebar-link">
                 <a href="{{ route('user.user-mangement') }}" class="d-flex align-items-center gap-2">
                     <svg width="20" height="20" viewBox="0 0 36 36" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M31.5 6.75V10.6875C31.5 10.9859 31.3815 11.272 31.1705 11.483C30.9595 11.694 30.6734 11.8125 30.375 11.8125C30.0766 11.8125 29.7905 11.694 29.5795 11.483C29.3685 11.272 29.25 10.9859 29.25 10.6875V6.75H25.3125C25.0141 6.75 24.728 6.63147 24.517 6.42049C24.306 6.20952 24.1875 5.92337 24.1875 5.625C24.1875 5.32663 24.306 5.04048 24.517 4.82951C24.728 4.61853 25.0141 4.5 25.3125 4.5H29.25C29.8467 4.5 30.419 4.73705 30.841 5.15901C31.2629 5.58097 31.5 6.15326 31.5 6.75ZM30.375 24.1875C30.0766 24.1875 29.7905 24.306 29.5795 24.517C29.3685 24.728 29.25 25.0141 29.25 25.3125V29.25H25.3125C25.0141 29.25 24.728 29.3685 24.517 29.5795C24.306 29.7905 24.1875 30.0766 24.1875 30.375C24.1875 30.6734 24.306 30.9595 24.517 31.1705C24.728 31.3815 25.0141 31.5 25.3125 31.5H29.25C29.8467 31.5 30.419 31.2629 30.841 30.841C31.2629 30.419 31.5 29.8467 31.5 29.25V25.3125C31.5 25.0141 31.3815 24.728 31.1705 24.517C30.9595 24.306 30.6734 24.1875 30.375 24.1875ZM10.6875 29.25H6.75V25.3125C6.75 25.0141 6.63147 24.728 6.42049 24.517C6.20952 24.306 5.92337 24.1875 5.625 24.1875C5.32663 24.1875 5.04048 24.306 4.82951 24.517C4.61853 24.728 4.5 25.0141 4.5 25.3125V29.25C4.5 29.8467 4.73705 30.419 5.15901 30.841C5.58097 31.2629 6.15326 31.5 6.75 31.5H10.6875C10.9859 31.5 11.272 31.3815 11.483 31.1705C11.694 30.9595 11.8125 30.6734 11.8125 30.375C11.8125 30.0766 11.694 29.7905 11.483 29.5795C11.272 29.3685 10.9859 29.25 10.6875 29.25ZM5.625 11.8125C5.92337 11.8125 6.20952 11.694 6.42049 11.483C6.63147 11.272 6.75 10.9859 6.75 10.6875V6.75H10.6875C10.9859 6.75 11.272 6.63147 11.483 6.42049C11.694 6.20952 11.8125 5.92337 11.8125 5.625C11.8125 5.32663 11.694 5.04048 11.483 4.82951C11.272 4.61853 10.9859 4.5 10.6875 4.5H6.75C6.15326 4.5 5.58097 4.73705 5.15901 5.15901C4.73705 5.58097 4.5 6.15326 4.5 6.75V10.6875C4.5 10.9859 4.61853 11.272 4.82951 11.483C5.04048 11.694 5.32663 11.8125 5.625 11.8125ZM24.75 24.75C24.5752 24.7504 24.4028 24.71 24.2463 24.6322C24.0898 24.5543 23.9537 24.4411 23.8486 24.3014C23.1675 23.3932 22.2842 22.6561 21.2688 22.1484C20.2535 21.6407 19.1338 21.3764 17.9986 21.3764C16.8634 21.3764 15.7437 21.6407 14.7283 22.1484C13.713 22.6561 12.8297 23.3932 12.1486 24.3014C11.9692 24.5401 11.7023 24.6978 11.4067 24.7397C11.1111 24.7816 10.8109 24.7044 10.5722 24.525C10.3335 24.3456 10.1758 24.0787 10.1339 23.7831C10.092 23.4875 10.1692 23.1873 10.3486 22.9486C11.3456 21.6136 12.6744 20.5626 14.2031 19.8998C13.3654 19.135 12.7785 18.1348 12.5195 17.0305C12.2604 15.9262 12.3412 14.7694 12.7514 13.7118C13.1615 12.6543 13.8818 11.7454 14.8178 11.1046C15.7537 10.4637 16.8615 10.1208 17.9958 10.1208C19.1301 10.1208 20.2379 10.4637 21.1738 11.1046C22.1097 11.7454 22.83 12.6543 23.2402 13.7118C23.6503 14.7694 23.7312 15.9262 23.4721 17.0305C23.213 18.1348 22.6261 19.135 21.7884 19.8998C23.3182 20.5622 24.648 21.6132 25.6458 22.9486C25.7713 23.1154 25.848 23.3139 25.8671 23.5219C25.8862 23.7298 25.8471 23.9389 25.7542 24.1259C25.6612 24.3129 25.518 24.4703 25.3407 24.5805C25.1633 24.6907 24.9588 24.7494 24.75 24.75ZM18 19.125C18.6675 19.125 19.32 18.9271 19.875 18.5562C20.4301 18.1854 20.8626 17.6583 21.1181 17.0416C21.3735 16.4249 21.4404 15.7463 21.3102 15.0916C21.1799 14.4369 20.8585 13.8355 20.3865 13.3635C19.9145 12.8915 19.3131 12.5701 18.6584 12.4398C18.0037 12.3096 17.3251 12.3765 16.7084 12.6319C16.0917 12.8874 15.5646 13.3199 15.1938 13.875C14.8229 14.43 14.625 15.0825 14.625 15.75C14.625 16.6451 14.9806 17.5036 15.6135 18.1365C16.2464 18.7694 17.1049 19.125 18 19.125Z"
                             fill="#7D7D7D" />
                     </svg>
                     <span key="t-dashboards">Supplier Management</span>
                 </a>
             </li>
             <li class="sidebar-link">
                 <a href="{{ route('logout') }}" class="d-flex align-items-center gap-2"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path
                             d="M2.22222 20C1.61111 20 1.08815 19.7826 0.653333 19.3478C0.218519 18.913 0.000740741 18.3896 0 17.7778V2.22222C0 1.61111 0.217778 1.08815 0.653333 0.653333C1.08889 0.218519 1.61185 0.000740741 2.22222 0H10V2.22222H2.22222V17.7778H10V20H2.22222ZM14.4444 15.5556L12.9167 13.9444L15.75 11.1111H6.66667V8.88889H15.75L12.9167 6.05556L14.4444 4.44444L20 10L14.4444 15.5556Z"
                             fill="#7D7D7D" />
                     </svg>

                     <span key="t-dashboards">Logout</span>
                 </a>
             </li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
             {{-- <li class="sidebar-link">
                 <a href="{{ route('user.user-mangement') }}" class="d-flex align-items-center gap-2">
                     <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <g clip-path="url(#clip0_2894_242)">
                             <path
                                 d="M35.6711 18.796L32.2961 22.171C32.1916 22.2756 32.0675 22.3586 31.9309 22.4152C31.7944 22.4718 31.648 22.5009 31.5001 22.5009C31.3523 22.5009 31.2059 22.4718 31.0693 22.4152C30.9328 22.3586 30.8087 22.2756 30.7042 22.171L27.3292 18.796C27.1181 18.5849 26.9995 18.2986 26.9995 18.0001C26.9995 17.7015 27.1181 17.4152 27.3292 17.2041C27.5403 16.993 27.8266 16.8744 28.1251 16.8744C28.4237 16.8744 28.71 16.993 28.9211 17.2041L30.3751 18.6596V18.0001C30.3764 15.3797 29.5459 12.8266 28.0032 10.7084C26.4606 8.59033 24.2853 7.01657 21.7909 6.21388C19.2966 5.41119 16.6118 5.421 14.1233 6.24191C11.6348 7.06282 9.4712 8.65244 7.94404 10.7818C7.76987 11.0242 7.50653 11.1875 7.21195 11.2358C6.91737 11.284 6.61569 11.2133 6.37326 11.0391C6.13084 10.865 5.96753 10.6016 5.91927 10.307C5.87101 10.0125 5.94175 9.71077 6.11592 9.46834C7.92082 6.95189 10.4779 5.07331 13.4189 4.10324C16.3598 3.13317 19.5328 3.12169 22.4807 4.07044C25.4286 5.01919 27.9993 6.8792 29.8223 9.38252C31.6454 11.8858 32.6268 14.9033 32.6251 18.0001V18.6596L34.0792 17.2041C34.2903 16.993 34.5766 16.8744 34.8751 16.8744C35.1737 16.8744 35.46 16.993 35.6711 17.2041C35.8822 17.4152 36.0008 17.7015 36.0008 18.0001C36.0008 18.2986 35.8822 18.5849 35.6711 18.796ZM29.8801 26.5304C28.0747 29.0449 25.518 30.9218 22.578 31.8907C19.6379 32.8597 16.4663 32.8708 13.5196 31.9224C10.5729 30.974 8.00307 29.1151 6.18009 26.6133C4.35712 24.1114 3.37501 21.0956 3.37514 18.0001V17.3405L1.92107 18.796C1.70998 19.0071 1.42367 19.1257 1.12514 19.1257C0.826603 19.1257 0.540296 19.0071 0.3292 18.796C0.118104 18.5849 -0.000488281 18.2986 -0.000488281 18.0001C-0.000488281 17.7015 0.118104 17.4152 0.3292 17.2041L3.7042 13.8291C3.80868 13.7245 3.93276 13.6415 4.06933 13.5849C4.2059 13.5283 4.35229 13.4992 4.50014 13.4992C4.64798 13.4992 4.79437 13.5283 4.93094 13.5849C5.06752 13.6415 5.19159 13.7245 5.29607 13.8291L8.67107 17.2041C8.88217 17.4152 9.00076 17.7015 9.00076 18.0001C9.00076 18.2986 8.88217 18.5849 8.67107 18.796C8.45998 19.0071 8.17367 19.1257 7.87514 19.1257C7.5766 19.1257 7.2903 19.0071 7.0792 18.796L5.62514 17.3405V18.0001C5.62247 21.0294 6.73586 23.9536 8.75264 26.214C10.0073 24.3958 11.7716 22.9892 13.8236 22.171C12.7213 21.3028 11.917 20.1128 11.5225 18.7663C11.128 17.4199 11.1628 15.9839 11.6222 14.6582C12.0816 13.3324 12.9427 12.1828 14.0858 11.3692C15.2289 10.5555 16.5971 10.1183 18.0001 10.1183C19.4032 10.1183 20.7714 10.5555 21.9145 11.3692C23.0576 12.1828 23.9187 13.3324 24.3781 14.6582C24.8375 15.9839 24.8723 17.4199 24.4778 18.7663C24.0833 20.1128 23.2789 21.3028 22.1767 22.171C24.2306 22.9893 25.9961 24.3976 27.2505 26.2182C27.5349 25.8987 27.8029 25.565 28.0534 25.2183C28.2276 24.9759 28.4909 24.8126 28.7855 24.7644C29.0801 24.7161 29.3818 24.7868 29.6242 24.961C29.8666 25.1352 30.0299 25.3985 30.0782 25.6931C30.1265 25.9877 30.0557 26.2894 29.8815 26.5318L29.8801 26.5304ZM18.0001 21.3751C18.8902 21.3751 19.7602 21.1111 20.5002 20.6167C21.2402 20.1222 21.817 19.4194 22.1576 18.5971C22.4982 17.7749 22.5873 16.8701 22.4137 15.9972C22.24 15.1242 21.8115 14.3224 21.1821 13.6931C20.5528 13.0637 19.751 12.6352 18.878 12.4615C18.0051 12.2879 17.1003 12.377 16.2781 12.7176C15.4558 13.0582 14.753 13.635 14.2585 14.375C13.7641 15.115 13.5001 15.985 13.5001 16.8751C13.5001 18.0685 13.9742 19.2131 14.8182 20.057C15.6621 20.901 16.8067 21.3751 18.0001 21.3751ZM18.0001 30.3751C20.7458 30.3715 23.4126 29.457 25.5826 27.7749C24.7688 26.5021 23.6476 25.4546 22.3225 24.729C20.9974 24.0035 19.5109 23.6232 18.0001 23.6232C16.4894 23.6232 15.0029 24.0035 13.6778 24.729C12.3526 25.4546 11.2315 26.5021 10.4176 27.7749C12.5844 29.463 15.2534 30.3782 18.0001 30.3751Z"
                                 fill="#7D7D7D" />
                         </g>
                         <defs>
                             <clipPath id="clip0_2894_242">
                                 <rect width="36" height="36" fill="white" />
                             </clipPath>
                         </defs>
                     </svg>
                     <span key="t-dashboards">User Management</span>
                 </a>
             </li> --}}
         </ul>
     </div>
 </div>
