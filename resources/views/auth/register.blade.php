<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
        }
        
        .input-field {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .input-field:focus {
            border-left: 4px solid #6366f1;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .btn-register {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }
        
        .illustration {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="register-container w-full max-w-4xl flex animate__animated animate__fadeIn">
        <!-- Illustration Section -->
        <div class="illustration hidden md:flex flex-col items-center justify-center p-10 text-white w-1/2">
            <div class="floating mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="23" y1="11" x2="17" y2="11"></line>
                </svg>
            </div>
            <h2 class="text-3xl font-bold mb-2">Join Us Today!</h2>
            <p class="text-center opacity-90">Create your account and start your journey with our platform.</p>
            
            <div class="mt-12 w-full max-w-xs">
                <div class="flex flex-col space-y-4 mt-6">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                            <span class="text-white">1</span>
                        </div>
                        <span class="text-white">Fill in your details</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                            <span class="text-white">2</span>
                        </div>
                        <span class="text-white">Verify your email</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-white bg-opacity-20 flex items-center justify-center mr-3">
                            <span class="text-white">3</span>
                        </div>
                        <span class="text-white">Start exploring</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Registration Form Section -->
        <div class="w-full md:w-1/2 p-10 overflow-y-auto" style="max-height: 90vh;">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Create Account</h1>
                <p class="text-gray-600">Fill in your details to get started</p>
            </div>
            
            <!-- Session Status -->
            <div class="mb-6 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
                <!-- Status message would appear here -->
                Welcome! Let's create your account.
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="name">Full Name</label>
                    <input id="name" name="name" type="text" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="John Doe" required autofocus>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                </div>
                
                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="email">Email Address</label>
                    <input id="email" name="email" type="email" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="you@example.com" required>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                </div>
                
                <!-- Phone -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="phone">Phone Number</label>
                    <input id="phone" name="phone" type="tel" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="+1 (555) 123-4567" required>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                </div>
                
                <!-- Address -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="address">Address</label>
                    <input id="address" name="address" type="text" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="123 Main St, City" required>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                </div>
                
                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="password">Password</label>
                    <input id="password" name="password" type="password" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="••••••••" required>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                    <div class="text-xs text-gray-500 mt-1">Minimum 8 characters with at least one number</div>
                </div>
                
                <!-- Confirm Password -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="input-field w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:bg-white" placeholder="••••••••" required>
                    <!-- Error messages would appear here -->
                    <div class="error-message mt-1"></div>
                </div>
                
                <!-- Register Button -->
                <button type="submit" class="btn-register w-full py-3 px-4 rounded-lg text-white font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-4">
                    Create Account
                </button>
                
                <!-- Already Registered Link -->
                <div class="text-center mt-4">
                    <p class="text-gray-600">Already have an account? 
                        <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:text-indigo-500">Sign in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Simple animation on load
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.input-field');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentElement.classList.add('animate__animated', 'animate__pulse');
                });
                input.addEventListener('blur', () => {
                    input.parentElement.classList.remove('animate__animated', 'animate__pulse');
                });
            });
            
            // Password strength indicator (example)
            const passwordInput = document.getElementById('password');
            passwordInput.addEventListener('input', function() {
                // You could add password strength logic here
            });
        });
    </script>
</body>
</html>