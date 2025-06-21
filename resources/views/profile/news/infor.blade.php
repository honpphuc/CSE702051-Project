<x-app-layout>
    <style>
        .card-icon {
            width: 280px;
            margin: 3rem auto;
            background: linear-gradient(to bottom, #ffffff, #fef3c7); /* trắng → vàng nhạt */
            color: #1f2937;
            border-radius: 20px;
            padding: 2rem 1.2rem;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            font-family: 'Segoe UI', sans-serif;
            position: relative;
            overflow: hidden;
            border: 3px solid #eab308;
        }

        .card-icon .overall {
            position: absolute;
            top: 1rem;
            left: 1rem;
            font-size: 1.7rem;
            font-weight: 800;
            color: #eab308;
        }

        .card-icon .badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 36px;
            height: 36px;
        }

        .card-icon img.avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            background-color: #f9fafb;
            margin: 2rem auto 1rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }

        .card-icon .name {
            font-size: 1.25rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .card-icon .position {
            font-size: 0.95rem;
            color: #4b5563;
            margin-top: 0.25rem;
        }

        .card-icon .info {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .card-icon .btn {
            margin-top: 1rem;
            display: inline-block;
            background-color: #facc15;
            color: #000;
            font-weight: 600;
            padding: 0.5rem 1.1rem;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .card-icon .btn:hover {
            background-color: #eab308;
        }
    </style>

    <div class="card-icon">
        <div class="overall">199</div>
        <img src="{{ asset('img/vietnam-flag.png') }}" alt="Nation" class="badge">
        <img src="{{ asset('img/avatar.png') }}" alt="Avatar" class="avatar">
        <div class="name">Lee Hồnn Foot</div>
        <div class="position">RM — ICON</div>
        <div class="info"><strong>Email:</strong> doibuonjqk@gmail.com</div>
        <div class="info"><strong>Số điện thoại:</strong> 123456789</div>
        <a href="mailto:doibuonjqk@gmail.com" class="btn">Liên hệ qua Email</a>
    </div>
</x-app-layout>
