<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Property Inventory System</title>
  <script src="assets/js/tailwind.js"></script>
  <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body class="min-h-screen bg-gradient-to-b from-[#f4f7fa] to-[#eaf0f9] flex items-center justify-center relative overflow-hidden">
  <div class="mesh-bg"></div>
  
  <div class="flex w-full min-h-screen items-center justify-center">
  
  <!-- Desktop-->
    <div class="hidden md:flex w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden border border-[#e7eaf0] z-10 relative">
      <div class="flex flex-col justify-center items-center w-1/2 bg-[#0e4a7b] text-white px-10 py-16 relative">
        <div class="w-full border-b border-white/20 pb-4 mb-6 flex items-center justify-center space-x-6">
          <img src="/assets/images/DOH Logo.png" class="h-20 object-contain">
          <img src="/assets/images/BGHMC logo hi-res.png" class="h-20 object-contain">
          <img src="/assets/images/Bagong_Pilipinas_logo.png" class="h-20 object-contain">
        </div>
        <div class="flex flex-col items-center text-center mb-4">
          <div class="text-sm font-semibold text-white/80 mb-1">
            Bataan General Hospital and Medical Center
          </div>
          <div class="text-2xl font-bold tracking-tight text-white mb-2">
            Property Accountability System
          </div>
          <div class="text-sm text-white/80 max-w-[20rem] leading-relaxed">
            <span class="text-[#1793e6] font-semibold">P</span>rotect, 
            <span class="text-[#1793e6] font-semibold">A</span>ccount, and 
            <span class="text-[#1793e6] font-semibold">S</span>ecure your property assets.
          </div>
        </div>
        <div class="absolute bottom-8 left-0 right-0 text-center text-xs text-white/70">
          &copy; 2025 BGHMC | IMISS
        </div>
        <svg class="absolute right-[-48px] bottom-[-48px] w-64 h-64 opacity-30" viewBox="0 0 200 200" fill="none">
          <path fill="#1793e6" d="M50,160 Q80,140 120,160 Q160,180 170,120 Q180,60 130,70 Q80,80 40,50 Q0,20 10,80 Q20,140 50,160Z"/>
        </svg>
      </div>

      <div class="w-1/2 flex flex-col justify-center px-8 py-16 bg-white bg-opacity-95 z-10">
        <div class="mb-6">
          <div class="text-2xl font-bold text-[#0e4a7b] mb-1">Welcome Back</div>
          <div class="text-sm text-[#7a8ca3]">Sign in to your account</div>
        </div>
        <form action="controllers/login.php" method="POST" class="space-y-5">
          <div>
            <label class="block text-sm font-semibold text-[#37475a] mb-1">Username</label>
            <input type="text" name="username" required autocomplete="username"
              class="w-full px-4 py-2 border border-[#e4e8f0] rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-[#1793e6] transition bg-[#f7faff] placeholder:text-[#b4bbca] text-[#29394e] font-medium" placeholder="Enter your username" />
          </div>
          <div class="relative">
            <label class="block text-sm font-semibold text-[#37475a] mb-1">Password</label>
            <input type="password" name="password" id="desktopPassword" required autocomplete="current-password"
              class="w-full px-4 py-2 border border-[#e4e8f0] rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-[#1793e6] transition bg-[#f7faff] placeholder:text-[#b4bbca] text-[#29394e] font-medium pr-10"
              placeholder="Enter your password" />
            <button type="button" 
              onclick="togglePassword('desktopPassword', 'desktopEyeIcon')" 
              class="absolute right-3 top-9 text-[#7a8ca3] hover:text-[#1793e6] focus:outline-none">
              <svg id="desktopEyeIcon" xmlns="http://www.w3.org/2000/svg" 
                  class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </div>
                    <div class="flex items-center justify-between text-xs">
            <label class="flex items-center select-none">
              <input type="checkbox" class="form-checkbox accent-[#1793e6] rounded mr-2">
              <span class="text-[#7a8ca3]">Remember me</span>
            </label>
            <a href="http://192.168.42.10:8085" target="_blank" class="text-[#1793e6] hover:underline font-medium">Forgot password?</a>
          </div>
          <button type="submit"
            class="w-full py-2 bg-[#1793e6] hover:bg-[#1279bb] text-white font-semibold rounded-lg shadow-lg transition text-base mt-2">
            Sign In
          </button>
        </form>
        <div class="mt-8 text-center text-xs text-[#b4bbca]">
          For authorized users only. Contact <span class="text-[#1793e6] font-semibold">IMISS</span> for access.
        </div>
      </div>
    </div>


    <!-- Mobile -->
  
    <div class="flex md:hidden min-h-screen flex-col bg-[#eaf0f9]">
      <div class="relative flex flex-col items-center justify-center pt-12 pb-8 px-4 bg-[#0e4a7b] rounded-b-[2.5rem] shadow-xl overflow-hidden">
        <div class="flex items-center justify-center space-x-4 mb-4 z-10">
          <img src="/assets/images/DOH Logo.png" alt="DOH Logo" class="h-14 w-auto object-contain">
          <img src="/assets/images/BGHMC logo hi-res.png" alt="BGHMC Logo" class="h-14 w-auto object-contain">
          <img src="/assets/images/Bagong_Pilipinas_logo.png" alt="Bagong Pilipinas Logo" class="h-14 w-auto object-contain">
        </div>
        <div class="w-60 border-b border-white/30 mb-4 z-10 sm:w-32"></div>
        <div class="flex flex-col items-center text-center z-10">
          <div class="text-xs font-semibold text-white/80 mb-1">
            Bataan General Hospital and Medical Center
          </div>
          <div class="text-lg font-bold tracking-tight mb-1 text-white">
            Property Accountability System
          </div>
          <div class="text-xs text-white/70 max-w-xs leading-snug">
            <span class="text-[#1793e6] font-semibold">P</span>rotect, 
            <span class="text-[#1793e6] font-semibold">A</span>ccount, and 
            <span class="text-[#1793e6] font-semibold">S</span>ecure your assets efficiently.
          </div>
        </div>
        <svg class="absolute right-[-40px] bottom-[-40px] w-48 h-48 opacity-30 z-0" viewBox="0 0 200 200" fill="none">
          <path fill="#1793e6" d="M50,160 Q80,140 120,160 Q160,180 170,120 Q180,60 130,70 Q80,80 40,50 Q0,20 10,80 Q20,140 50,160Z"/>
        </svg>
      </div>


      <div class="flex-1 flex flex-col justify-center px-4 pt-8">
        <form action="controllers/login.php" method="POST" class="space-y-5 w-full max-w-sm mx-auto bg-white/80 rounded-xl py-6 px-4 shadow-lg">
          <div>
            <label class="block text-sm font-semibold text-[#37475a] mb-1">Username</label>
            <input type="text" name="username" required autocomplete="username"
              class="w-full px-4 py-3 rounded-xl border border-[#e4e8f0] bg-[#f7faff] shadow focus:outline-none focus:ring-2 focus:ring-[#1793e6] placeholder:text-[#b4bbca] text-[#29394e] font-medium text-base"
              placeholder="Enter your username" />
          </div>
          <div class="relative">
            <label class="block text-sm font-semibold text-[#37475a] mb-1">Password</label>
            <input type="password" name="password" id="mobilePassword" required autocomplete="current-password"
              class="w-full px-4 py-3 rounded-xl border border-[#e4e8f0] bg-[#f7faff] shadow focus:outline-none focus:ring-2 focus:ring-[#1793e6] placeholder:text-[#b4bbca] text-[#29394e] font-medium text-base pr-10"
              placeholder="Enter your password" />
            <button type="button" onclick="togglePassword('mobilePassword', 'mobileEyeIcon')" 
              class="absolute right-3 top-10 text-[#7a8ca3] hover:text-[#1793e6] focus:outline-none">
              <svg id="mobileEyeIcon" xmlns="http://www.w3.org/2000/svg" 
                  class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-between text-xs">
            <label class="flex items-center select-none">
              <input type="checkbox" class="form-checkbox accent-[#1793e6] rounded mr-2">
              <span class="text-[#7a8ca3]">Remember me</span>
            </label>
            <a href="http://192.168.42.10:8085" class="text-[#1793e6] hover:underline font-medium">Forgot password?</a>
          </div>
          <button type="submit"
            class="w-full py-3 bg-[#1793e6] hover:bg-[#1279bb] text-white font-semibold rounded-xl shadow-[0_4px_24px_0_rgba(23,147,230,0.13)] transition text-base mt-2">
            Sign In
          </button>
        </form>
        <div class="mt-8 text-center text-xs text-[#b4bbca]">
          For authorized users only. Contact <span class="text-[#1793e6] font-semibold">IMISS</span> for access.
        </div>
        <div class="mt-8 text-center text-xs text-[#b4bbca]">
          &copy; 2025 BGHMC | IMISS
        </div>
      </div>
    </div>


  </div>
  <script src="/assets/js/login.js"></script>
</body>
</html>