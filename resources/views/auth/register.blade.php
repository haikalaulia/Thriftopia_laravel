<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Register</title>
    
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
        
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .register-title {
            font-size: 32px;
            font-weight: 700;
            color: #3975d8;
            margin-bottom: 8px;
        }
        
        .register-subtitle {
            color: #6b7280;
            font-size: 16px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
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
        
        .register-button {
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
            margin-top: 8px;
        }
        
        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(57, 117, 216, 0.3);
        }
        
        .register-button:active {
            transform: translateY(0);
        }
        
        .login-section {
            text-align: center;
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }
        
        .login-text {
            color: #6b7280;
            font-size: 14px;
        }
        
        .login-link {
            color: #3975d8;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }
        
        .login-link:hover {
            color: #2563eb;
        }
        
        .error-message {
            color: #dc2626;
            font-size: 14px;
            margin-top: 6px;
            display: block;
        }
        
        .password-strength {
            margin-top: 8px;
            font-size: 12px;
            color: #6b7280;
        }
        
        @media (max-width: 576px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            
            .register-container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            .register-title {
                font-size: 28px;
            }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            }
            
            .register-container {
                background: rgba(30, 41, 59, 0.95);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .register-title {
                color: #60a5fa;
            }
            
            .register-subtitle,
            .login-text,
            .password-strength {
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
    <div class="register-container">
        <div class="register-header">
            <h1 class="register-title">Buat Akun Baru</h1>
            <p class="register-subtitle">Bergabunglah dengan kami hari ini</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input 
                    id="name" 
                    class="form-input" 
                    type="text" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autofocus 
                    autocomplete="name"
                    placeholder="Masukkan nama lengkap Anda"
                />
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

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
                    autocomplete="username"
                    placeholder="contoh@email.com"
                />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Fields -->
            <div class="form-row">
                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input 
                        id="password" 
                        class="form-input"
                        type="password"
                        name="password"
                        required 
                        autocomplete="new-password"
                        placeholder="Minimal 8 karakter"
                    />
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                    <div class="password-strength">
                        Gunakan kombinasi huruf, angka & simbol
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input 
                        id="password_confirmation" 
                        class="form-input"
                        type="password"
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password"
                        placeholder="Ulangi kata sandi"
                    />
                </div>
            </div>

            <!-- Register Button -->
            <button type="submit" class="register-button">
                Daftar Sekarang
            </button>
        </form>

        <!-- Login Link -->
        <div class="login-section">
            <span class="login-text">Sudah punya akun?</span>
            <a href="{{ route('login') }}" class="login-link">
                Masuk di sini
            </a>
        </div>
    </div>
</body>
</html>