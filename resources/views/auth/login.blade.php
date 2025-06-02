<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 100%, #764ba2 0%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-title {
            font-size: 32px;
            font-weight: 700;
            color: #3975d8;
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            color: #6b7280;
            font-size: 16px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
            font-size: 14px;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #3975d8;
            background: white;
            box-shadow: 0 0 0 4px rgba(57, 117, 216, 0.1);
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            margin: 24px 0;
        }
        
        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: #3975d8;
            margin-right: 10px;
        }
        
        .checkbox-label {
            color: #6b7280;
            font-size: 14px;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 24px;
        }
        
        .forgot-link {
            color: #3975d8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .forgot-link:hover {
            color: #2563eb;
        }
        
        .login-button {
            width: 100%;
            background: linear-gradient(135deg, #3975d8 0%, #2563eb 100%);
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(57, 117, 216, 0.3);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        .register-section {
            text-align: center;
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }
        
        .register-text {
            color: #6b7280;
            font-size: 14px;
        }
        
        .register-link {
            color: #3975d8;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }
        
        .register-link:hover {
            color: #2563eb;
        }
        
        .error-message {
            color: #dc2626;
            font-size: 14px;
            margin-top: 6px;
            display: block;
        }
        
        .status-message {
            background: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #10b981;
            font-size: 14px;
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            .login-title {
                font-size: 28px;
            }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            }
            
            .login-container {
                background: rgba(30, 41, 59, 0.95);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .login-title {
                color: #60a5fa;
            }
            
            .login-subtitle,
            .checkbox-label,
            .register-text {
                color: #9ca3af;
            }
            
            .form-label {
                color: #f3f4f6;
            }
            
            .form-input {
                background: #374151;
                border-color: #4b5563;
                color: #f3f4f6;
            }
            
            .form-input:focus {
                background: #1f2937;
                border-color: #60a5fa;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h1 class="login-title">Selamat Datang</h1>
            <p class="login-subtitle">Masuk ke akun Anda</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="status-message">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">Alamat Email</label>
                <input 
                    id="email" 
                    class="form-input" 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus 
                    autocomplete="username"
                    placeholder="Masukkan email Anda"
                />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">Kata Sandi</label>
                <input 
                    id="password" 
                    class="form-input"
                    type="password"
                    name="password"
                    required 
                    autocomplete="current-password"
                    placeholder="Masukkan kata sandi Anda"
                />
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="checkbox-group">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="checkbox-input" 
                    name="remember"
                >
                <label for="remember_me" class="checkbox-label">
                    Ingat saya
                </label>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <div class="forgot-password">
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        Lupa kata sandi?
                    </a>
                </div>
            @endif

            <!-- Login Button -->
            <button type="submit" class="login-button">
                Masuk
            </button>
        </form>

        <!-- Register Link -->
        <div class="register-section">
            <span class="register-text">Belum punya akun?</span>
            <a href="{{ route('register') }}" class="register-link">
                Daftar sekarang
            </a>
        </div>
    </div>
</body>
</html>