<template>
    <div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Ask a Question???</h2>
                                <p class="m-2 mt-3  text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Feel free to ask any question you have in the box below and receive the answer conveniently in the adjacent box. Let's engage in a friendly and informative conversation. Take advantage of this space to seek knowledge and get the answers you need. Enjoy the interactive experience
                                </p>
                                <div>
                                    <div class="isolate  px-6 py-24 sm:py-2 lg:px-8">
                                        <div class="mx-auto max-w-xl sm:mt-4">
                                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                                <div class="sm:col-span-2">
                                                    <div class="mt-2.5">
                                                        <textarea name="question" id="question" rows="6" class="dark:bg-gray-500/50 block w-full rounded-md border-0 px-3.5 py-2 text-gray-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-10">

                                                <button type="submit" @click="sendRequest()" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's Ask!</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">Your Answer!?!</h2>
                                <p class="m-2 mt-3  text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Explore, chat, and broaden your horizons with ChatGPT's friendly and insightful responses. Engage in interactive conversations to discover new perspectives and expand your knowledge.
                                </p>
                                <div>
                                    <div class="isolate  px-6 py-24 sm:py-2 lg:px-8">
                                        <div class="mx-auto max-w-xl sm:mt-4">
                                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                                <div class="sm:col-span-2">
                                                    <div class="questionAnswers " v-for="qa in questionAnswers">
                                                        <div class="mt-2 mr-12">
                                                            <textarea id="answers" disabled  rows="3" class="dark:bg-gray-500/50 block w-full rounded-md border-0 px-3.5 py-2 text-gray-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ qa[0].content }}</textarea>
                                                        </div>
                                                        <div class="mt-2.5 ml-12" >
                                                            <textarea id="answers" v-if="qa[1].content !== undefined" disabled  rows="5" class="dark:bg-gray-500/50 block w-full rounded-md border-0 px-3.5 py-2 text-gray-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ qa[1].content }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                            <div class="flex items-center gap-4">
                                <a href="https://www.coffeebede.com/mansuri.dev0" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                    Sponsor
                                </a>
                                <button @click="openCrypto()" data-modal-toggle="small-modal" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                            <path d="m21.7101 9.89937-2.4-4.81999c-.47-.95-1.72-1.72-2.78-1.72h-9.06c-1.06 0-2.31.77-2.78 1.72l-2.40001 4.81999c-.58 1.16003-.26 2.81003.69 3.68003l6.93001 6.29c1.15 1.04 3.02 1.04 4.17 0l6.93-6.29c.96-.87 1.28-2.53.7-3.68003zm-5.71-.64999h-3.25v5.25002c0 .41-.34.75-.75.75s-.75-.34-.75-.75v-5.25002h-3.25c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h8c.41 0 .75.34.75.75s-.34.75-.75.75z" fill="#000"/>
                                        </svg>
                                        <span id="crypto">Crypto</span>
                                </button>



                            </div>
                        </div>

                        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                            Powered By Laravel with <span class="text-red-700">&lt;3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</template>

<script>
    import showdown from "showdown"
    const converter = new showdown.Converter();
    export default {
        setup() {
        },
        data() {
          return{
            questionAnswers: [],
            numbersOfQuestions: 0,
          };
        },
        methods: {
            openCrypto(){
                document.querySelector("#crypto").innerHTML = "TRON NETWORK = TRPtuMNNu79NehbXnNFkXGND7WQ3CFjPw6"

            },
            sendRequest(){


                let question = document.querySelector('#question').value

                this.questionAnswers.push([{"role":"user", "content": question}])

                let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');



                console.log("here")
                axios.post('/',{
                    "_token": _token,
                    "question": this.questionAnswers
                }).then(response => {

                    let data = {"role":"assistant", "content": response.data.content}

                    this.questionAnswers[this.numbersOfQuestions-1].push(data)

                }).catch(err => {
                    this.questionAnswers.pop()
                    console.log(err)
                });
                this.numbersOfQuestions++;
            },

        },

    }
</script>
