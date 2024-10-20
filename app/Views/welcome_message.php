<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>

<body class="antialiased bg-gray-800 dark:bg-gray-100 text-gray-100 dark:text-gray-800">
    <div class="flex flex-col min-h-screen space-y-12">
        <header class="container flex items-center justify-between w-full max-w-3xl px-6 py-10 mx-auto xl:max-w-5xl">
            <a rel="noopener noreferrer" href="#" class="block h-6 text-2xl font-semibold">Leroy Jenkins</a>
            <div class="flex items-center">
                <div class="hidden space-x-2 font-medium sm:block">
                    <a rel="noopener noreferrer" href="#" class="p-1">Blog</a>
                    <a rel="noopener noreferrer" href="#" class="p-1">Tags</a>
                    <a rel="noopener noreferrer" href="#" class="p-1">Projects</a>
                    <a rel="noopener noreferrer" href="#" class="p-1">About</a>
                </div>
                <button aria-label="Toggle Dark Mode" type="button" class="w-8 h-8 p-1 ml-1 mr-1 rounded sm:ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900 dark:text-gray-50">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
                <div class="sm:hidden">
                    <button type="button" aria-label="Toggle Menu" class="w-8 h-8 ml-1 mr-1 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900 dark:text-gray-50">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="fixed right-0 z-10 w-full h-full duration-300 ease-in-out transform translate-x-full top-24">
                        <button type="button" aria-label="toggle modal" class="fixed w-full h-full cursor-auto focus:outline-none"></button>
                        <nav class="fixed h-full mt-8">
                            <div class="px-12 py-4">
                                <a rel="noopener noreferrer" href="#" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-50">Blog</a>
                            </div>
                            <div class="px-12 py-4">
                                <a rel="noopener noreferrer" href="#" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-50">Tags</a>
                            </div>
                            <div class="px-12 py-4">
                                <a rel="noopener noreferrer" href="#" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-50">Projects</a>
                            </div>
                            <div class="px-12 py-4">
                                <a rel="noopener noreferrer" href="#" class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-50">About</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <h2 class="text-4xl font-extrabold text-white">
            token <?php echo $token ?>
        </h2>
        <main class="container flex-1 max-w-3xl px-6 mx-auto space-y-12 xl:max-w-5xl">
            <div class="space-y-6">
                <h2 class="text-3xl font-extrabold text-gray-50 dark:text-gray-900">Recent blog posts</h2>
                <ul class="space-y-8 xl:space-y-10">
                    <li>
                        <article>
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-xs text-gray-400 dark:text-gray-600">
                                    <time datetime="2021-01-12">January 12, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-1">
                                <h3 class="text-2xl font-bold tracking-tight">
                                    <a rel="noopener noreferrer" href="#" class="text-gray-50 dark:text-gray-900">Hendrerit vulputate eu quo.</a>
                                </h3>
                                <p class="max-w-full text-gray-100 dark:text-gray-800 prose prose-invert">Qui ei agam assum vivendum, ad nostro mediocrem sit, erant sanctus maiestatis vel no. Reque periculis usu at, id mel dicam impetus aliquip. At discere feugiat qui, meliore lucilius persecuti ut pri, vivendo corpora ne sit.</p>
                                <div class="flex flex-wrap space-x-3">
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#angular</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#tailwind</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#webdev</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-xs text-gray-400 dark:text-gray-600">
                                    <time datetime="2021-01-12">January 12, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-1">
                                <h3 class="text-2xl font-bold tracking-tight">
                                    <a rel="noopener noreferrer" href="#" class="text-gray-50 dark:text-gray-900"> Vis te oporteat deterruisset.</a>
                                </h3>
                                <p class="max-w-full text-gray-100 dark:text-gray-800 prose prose-invert"> Vero facete sea ne. Ludus saperet scriptorem no usu. Legere intellegam delicatissimi te sit. Vis te oporteat deterruisset.</p>
                                <div class="flex flex-wrap space-x-3">
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#angular</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#tailwind</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#webdev</a>
                                </div>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-xs text-gray-400 dark:text-gray-600">
                                    <time datetime="2021-01-12">January 12, 2021</time>
                                </dd>
                            </dl>
                            <div class="space-y-1">
                                <h3 class="text-2xl font-bold tracking-tight">
                                    <a rel="noopener noreferrer" href="#" class="text-gray-50 dark:text-gray-900">Mentitum apeirian vim ne, usu illud ridens cu.</a>
                                </h3>
                                <p class="max-w-full text-gray-100 dark:text-gray-800 prose prose-invert">Duo ei paulo decore periculis, sed ex hinc inermis vivendo, meis feugait no mea. Pri magna commodo urbanitas cu, id eos lorem inimicus prodesset. Cu qui vidisse epicurei accusamus.</p>
                                <div class="flex flex-wrap space-x-3">
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#angular</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#tailwind</a>
                                    <a rel="noopener noreferrer" href="#" class="text-xs text-violet-400 dark:text-violet-600">#webdev</a>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </main>

        <footer class="container flex flex-col items-center max-w-3xl px-6 mx-auto xl:max-w-5xl">
            <div class="flex mb-3 space-x-4">
                <a target="_blank" rel="noopener noreferrer" href="mailto:address@yoursite.com" class="text-sm">
                    <span class="sr-only">mail</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com" class="text-sm">
                    <span class="sr-only">github</span>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                    </svg>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://facebook.com" class="text-sm">
                    <span class="sr-only">facebook</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                    </svg>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://youtube.com" class="text-sm">
                    <span class="sr-only">youtube</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                    </svg>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com" class="text-sm">
                    <span class="sr-only">linkedin</span>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                    </svg>
                </a>
                <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/Twitter" class="text-sm">
                    <span class="sr-only">twitter</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current text-violet-400 dark:text-violet-600">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                    </svg>
                </a>
            </div>
        </footer>
    </div>
</body>

</html>