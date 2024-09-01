<div>
<div class="px-4 py-10 sm:px-6 lg:px-8">
    <div class="max-w-md p-6 lg:p-10 mx-auto">
        <div class="flex flex-center mx-auto justify-center items-center space-x-6 lg:items-start">
            <a 
                href="<?php echo e(route('home')); ?>"
            >
                <img 
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Lambang_Kabupaten_Siak.png/800px-Lambang_Kabupaten_Siak.png" 
                    alt="logo"
                    class="w-[80px] mb-4"
                >
            </a>
        </div>
        <h1 class="text-center text-2xl font-bold text-black/80 sm:text-3xl">
            Login Istana Data
        </h1>
    
        <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
            Gunakan Akun yang sudah ada
        </p>
    
        <form
            wire:submit="login"
            action=""
            class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
        >
            <p class="text-center text-lg font-medium">Masuk</p>
    
            <div>
            <label for="email" class="sr-only">Email</label>
    
            <div class="relative">
                <input
                type="email"
                name="email"
                id="email"
                wire:model="email"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Masukkan email"
                />
    
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                </svg>
                </span>
            </div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-sm mx-4 text-red-500"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
            </div>
    
            <div>
            <label for="password" class="sr-only">Password</label>
    
            <div class="relative">
                <input
                type="password"
                name="password"
                id="password"
                wire:model="password"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Masukkan password"
                />
    
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    />
                </svg>
                </span>
            </div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-sm mx-4 text-red-500"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
            </div>
    
            <button
            type="submit"
            class="block w-full rounded-lg bg-[#0365FE] px-5 py-3 text-sm font-medium text-white"
            >
            Masuk
            </button>
        </form>
        </div>
    </div>
    
</div><?php /**PATH /Users/raflifebrian/Documents/Dev/portaldata/resources/views/livewire/auth/login.blade.php ENDPATH**/ ?>