<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => Http::response(
                [
                    'results' => [array:4 [
                        "page" => 1
                        "results" => array:20 [
                          0 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg"
                            "genre_ids" => array:3 [
                              0 => 28
                              1 => 12
                              2 => 878
                            ]
                            "id" => 634649
                            "original_language" => "en"
                            "original_title" => "Spider-Man: No Way Home"
                            "overview" => "Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man."
                            "popularity" => 6260.858
                            "poster_path" => "/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg"
                            "release_date" => "2021-12-15"
                            "title" => "Spider-Man: No Way Home"
                            "video" => false
                            "vote_average" => 8.3
                            "vote_count" => 8885
                          ]
                          1 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/5P8SmMzSNYikXpxil6BYzJ16611.jpg"
                            "genre_ids" => array:3 [
                              0 => 80
                              1 => 9648
                              2 => 53
                            ]
                            "id" => 414906
                            "original_language" => "en"
                            "original_title" => "The Batman"
                            "overview" => "In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler."
                            "popularity" => 4517.934
                            "poster_path" => "/74xTEgt7R36Fpooo50r9T25onhq.jpg"
                            "release_date" => "2022-03-01"
                            "title" => "The Batman"
                            "video" => false
                            "vote_average" => 8.1
                            "vote_count" => 1035
                          ]
                          2 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/3G1Q5xF40HkUBJXxt2DQgQzKTp5.jpg"
                            "genre_ids" => array:4 [
                              0 => 16
                              1 => 35
                              2 => 10751
                              3 => 14
                            ]
                            "id" => 568124
                            "original_language" => "en"
                            "original_title" => "Encanto"
                            "overview" => "The tale of an extraordinary family, the Madrigals, who live hidden in the mountains of Colombia, in a magical house, in a vibrant town, in a wondrous, charmed place called an Encanto. 
                      The magic of the Encanto has blessed every child in the family with a unique gift from super strength to the power to heal—every child except one, Mirabel. But when she discovers that the magic surrounding 
                      the Encanto is in danger, Mirabel decides that she, the only ordinary Madrigal, might just be her exceptional family's last hope."
                            "popularity" => 2813.474
                            "poster_path" => "/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg"
                            "release_date" => "2021-11-24"
                            "title" => "Encanto"
                            "video" => false
                            "vote_average" => 7.7
                            "vote_count" => 5044
                          ]
                          3 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/oQPbZ5e6J9fuAyv4Gl0mMZMIyPI.jpg"
                            "genre_ids" => array:4 [
                              0 => 28
                              1 => 12
                              2 => 53
                              3 => 10752
                            ]
                            "id" => 476669
                            "original_language" => "en"
                            "original_title" => "The King's Man"
                            "overview" => "As a collection of history's worst tyrants and criminal masterminds gather to plot a war to wipe out millions, one man must race against time to stop them."
                            "popularity" => 2393.102
                            "poster_path" => "/aq4Pwv5Xeuvj6HZKtxyd23e6bE9.jpg"
                            "release_date" => "2021-12-22"
                            "title" => "The King's Man"
                            "video" => false
                            "vote_average" => 7
                            "vote_count" => 1761
                          ]
                          4 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/usaZV7KB6Man9Rm9TyDAeQf7uVD.jpg"
                            "genre_ids" => array:3 [
                              0 => 27
                              1 => 9648
                              2 => 53
                            ]
                            "id" => 646385
                            "original_language" => "en"
                            "original_title" => "Scream"
                            "overview" => "Twenty-five years after a streak of brutal murders shocked the quiet town of Woodsboro, a new killer has donned the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town’s deadly past."
                            "popularity" => 2112.147
                            "poster_path" => "/kZNHR1upJKF3eTzdgl5V8s8a4C3.jpg"
                            "release_date" => "2022-01-12"
                            "title" => "Scream"
                            "video" => false
                            "vote_average" => 6.9
                            "vote_count" => 805
                          ]
                          5 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/pnZ9NMxRqbcJ2dPNROIoregruv5.jpg"
                            "genre_ids" => array:3 [
                              0 => 28
                              1 => 80
                              2 => 53
                            ]
                            "id" => 753232
                            "original_language" => "en"
                            "original_title" => "The Commando"
                            "overview" => "An elite DEA agent returns home after a failed mission when his family makes an unexpected discovery in their house – a stash of money worth $3 million. They soon face the danger and threat of a newly released criminal and his crew, who will do whatever it takes to retrieve the money, including kidnap the agent’s daughters. Stakes are high and lives are at risk in this head-to-head battle as the agent stops at nothing to protect his family against the money-hungry criminals."
                            "popularity" => 2224.556
                            "poster_path" => "/mvCVaas7FkRV8uvyIJl1ANdT28k.jpg"
                            "release_date" => "2022-01-07"
                            "title" => "The Commando"
                            "video" => false
                            "vote_average" => 6.9
                            "vote_count" => 26
                          ]
                          6 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/wMUPT99gw6IB9OVvC46rF8wHIRt.jpg"
                            "genre_ids" => array:3 [
                              0 => 28
                              1 => 80
                              2 => 14
                            ]
                            "id" => 890656
                            "original_language" => "en"
                            "original_title" => "Fistful of Vengeance"
                            "overview" => "A revenge mission becomes a fight to save the world from an ancient threat when superpowered assassin Kai tracks a killer to Bangkok."
                            "popularity" => 2047.769
                            "poster_path" => "/3cccEF9QZgV9bLWyupJO41HSrOV.jpg"
                            "release_date" => "2022-02-17"
                            "title" => "Fistful of Vengeance"
                            "video" => false
                            "vote_average" => 5.3
                            "vote_count" => 109
                          ]
                          7 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/mruT954ve6P1zquaRs6XG0hA5k9.jpg"
                            "genre_ids" => array:1 [
                              0 => 53
                            ]
                            "id" => 800510
                            "original_language" => "en"
                            "original_title" => "Kimi"
                            "overview" => "A tech worker with agoraphobia discovers recorded evidence of a violent crime but 
                      is met with resistance when she tries to report it. Seeking justice, she must do the thing she fears the most: she must leave her apartment."
                            "popularity" => 2039.86
                            "poster_path" => "/okNgwtxIWzGsNlR3GsOS0i0Qgbn.jpg"
                            "release_date" => "2022-02-10"
                            "title" => "Kimi"
                            "video" => false
                            "vote_average" => 6.3
                            "vote_count" => 201
                          ]
                          8 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/eG0oOQVsniPAuecPzDD1B1gnYWy.jpg"
                            "genre_ids" => array:4 [
                              0 => 16
                              1 => 35
                              2 => 12
                              3 => 10751
                            ]
                            "id" => 774825
                            "original_language" => "en"
                            "original_title" => "The Ice Age Adventures of Buck Wild"
                            "overview" => "The fearless one-eyed weasel Buck teams up with mischievous possum brothers Crash 
                      & Eddie as they head off on a new adventure into Buck's home: The Dinosaur World."
                            "popularity" => 1788.551
                            "poster_path" => "/zzXFM4FKDG7l1ufrAkwQYv2xvnh.jpg"
                            "release_date" => "2022-01-28"
                            "title" => "The Ice Age Adventures of Buck Wild"
                            "video" => false
                            "vote_average" => 7.2
                            "vote_count" => 728
                          ]
                          9 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/c6H7Z4u73ir3cIoCteuhJh7UCAR.jpg"
                            "genre_ids" => array:1 [
                              0 => 878
                            ]
                            "id" => 524434
                            "original_language" => "en"
                            "original_title" => "Eternals"
                            "overview" => "The Eternals are a team of ancient aliens who have been living on Earth in secret 
                      for thousands of years. When an unexpected tragedy forces them out of the shadows, they are forced to reunite against mankind’s most ancient enemy, the Deviants."
                            "popularity" => 1912.707
                            "poster_path" => "/bcCBq9N1EMo3daNIjWJ8kYvrQm6.jpg"
                            "release_date" => "2021-11-03"
                            "title" => "Eternals"
                            "video" => false
                            "vote_average" => 7.2
                            "vote_count" => 4705
                          ]
                          10 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/mqDnDhG5N6fn1H4MKQqr8E5wfeK.jpg"
                            "genre_ids" => array:3 [
                              0 => 80
                              1 => 18
                              2 => 53
                            ]
                            "id" => 597208
                            "original_language" => "en"
                            "original_title" => "Nightmare Alley"
                            "overview" => "An ambitious carnival man with a talent for manipulating people with a few well-chosen words hooks up with a female psychiatrist who is even more dangerous than he is."
                            "popularity" => 1861.657
                            "poster_path" => "/680klE0dIreQQOyWKFgNnCAJtws.jpg"
                            "release_date" => "2021-12-02"
                            "title" => "Nightmare Alley"
                            "video" => false
                            "vote_average" => 7.1
                            "vote_count" => 943
                          ]
                          11 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/aTSA5zMWlVFTYBIZxTCMbLkfOtb.jpg"
                            "genre_ids" => array:1 [
                              0 => 27
                            ]
                            "id" => 632727
                            "original_language" => "en"
                            "original_title" => "Texas Chainsaw Massacre"
                            "overview" => "In this sequel, influencers looking to breathe new life into a Texas ghost town encounter Leatherface, an infamous killer who wears a mask of human skin."
                            "popularity" => 1737.275
                            "poster_path" => "/meRIRfADEGVo65xgPO6eZvJ0CRG.jpg"
                            "release_date" => "2022-02-18"
                            "title" => "Texas Chainsaw Massacre"
                            "video" => false
                            "vote_average" => 5.1
                            "vote_count" => 518
                          ]
                          12 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/cugmVwK0N4aAcLibelKN5jWDXSx.jpg"
                            "genre_ids" => array:4 [
                              0 => 16
                              1 => 28
                              2 => 14
                              3 => 12
                            ]
                            "id" => 768744
                            "original_language" => "ja"
                            "original_title" => "僕のヒーローアカデミア THE MOVIE ワールド ヒーローズ ミッション"
                            "overview" => "A mysterious group called Humarize strongly believes in the Quirk Singularity Doomsday theory which states that when quirks get mixed further in with future generations, that power will bring forth the end of humanity. In order to save everyone, the Pro-Heroes around the world ask UA Academy heroes-in-training to assist them and form a world-classic selected hero team. It is up to the heroes to save the world and the future of heroes in what is the most dangerous crisis to take place yet in My Hero Academia."
                            "popularity" => 1840.849
                            "poster_path" => "/4NUzcKtYPKkfTwKsLjwNt8nRIXV.jpg"
                            "release_date" => "2021-08-06"
                            "title" => "My Hero Academia: World Heroes' Mission"
                            "video" => false
                            "vote_average" => 7.4
                            "vote_count" => 97
                          ]
                          13 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/yKnjIWNIVECfMoKy1ayl68vX6qj.jpg"
                            "genre_ids" => array:3 [
                              0 => 28
                              1 => 80
                              2 => 53
                            ]
                            "id" => 871799
                            "original_language" => "en"
                            "original_title" => "Pursuit"
                            "overview" => "Detective Breslin crosses paths with Calloway, a ruthless hacker desperate to find his wife, who has been kidnapped by a drug cartel. When Calloway escapes police custody, Breslin joins forces with a no-nonsense female cop to reclaim his prisoner. But is Calloway’s crime-boss father somehow involved in this explosive situation?"
                            "popularity" => 1968.969
                            "poster_path" => "/wYihSXWYqN8Ejsdut2P1P0o97N0.jpg"
                            "release_date" => "2022-02-18"
                            "title" => "Pursuit"
                            "video" => false
                            "vote_average" => 6.2
                            "vote_count" => 15
                          ]
                          14 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/qBLEWvJNVsehJkEJqIigPsWyBse.jpg"
                            "genre_ids" => array:5 [
                              0 => 16
                              1 => 10751
                              2 => 14
                              3 => 35
                              4 => 12
                            ]
                            "id" => 585083
                            "original_language" => "en"
                            "original_title" => "Hotel Transylvania: Transformania"
                            "overview" => "When Van Helsing's mysterious invention, the "Monsterfication Ray," goes haywire, 
                      Drac and his monster pals are all transformed into humans, and Johnny becomes a monster. In their new mismatched bodies, Drac and Johnny must team up and race across the globe to find a cure before it's too late, and before they drive each other crazy."
                            "popularity" => 1693.653
                            "poster_path" => "/teCy1egGQa0y8ULJvlrDHQKnxBL.jpg"
                            "release_date" => "2022-02-25"
                            "title" => "Hotel Transylvania: Transformania"
                            "video" => false
                            "vote_average" => 7
                            "vote_count" => 274
                          ]
                          15 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/dK12GIdhGP6NPGFssK2Fh265jyr.jpg"
                            "genre_ids" => array:4 [
                              0 => 28
                              1 => 35
                              2 => 80
                              3 => 53
                            ]
                            "id" => 512195
                            "original_language" => "en"
                            "original_title" => "Red Notice"
                            "overview" => "An Interpol-issued Red Notice is a global alert to hunt and capture the world's most wanted. But when a daring heist brings together the FBI's top profiler and two rival criminals, there's no telling what will happen."
                            "popularity" => 1780.285
                            "poster_path" => "/q4kemt46zXXMwIEo7pDH1yKtr1p.jpg"
                            "release_date" => "2021-11-04"
                            "title" => "Red Notice"
                            "video" => false
                            "vote_average" => 6.8
                            "vote_count" => 3187
                          ]
                          16 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/eVSa4TpyXbOdk9fXSD6OcORJGtv.jpg"
                            "genre_ids" => array:1 [
                              0 => 53
                            ]
                            "id" => 803114
                            "original_language" => "en"
                            "original_title" => "The Requin"
                            "overview" => "A couple on a romantic getaway find themselves stranded at sea when a tropical storm sweeps away their villa. In order to survive, they are forced to fight the elements, while sharks circle below."
                            "popularity" => 1647.62
                            "poster_path" => "/i0z8g2VRZP3dhVvvSMilbOZMKqR.jpg"
                            "release_date" => "2022-01-28"
                            "title" => "The Requin"
                            "video" => false
                            "vote_average" => 4.6
                            "vote_count" => 65
                          ]
                          17 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/kQM7o3NIkruIZLoQ9E2XzZQ8Ujl.jpg"
                            "genre_ids" => array:3 [
                              0 => 28
                              1 => 35
                              2 => 80
                            ]
                            "id" => 783461
                            "original_language" => "hi"
                            "original_title" => "लूप लपेटा"
                            "overview" => "When her boyfriend loses a mobster's cash, Savi races against the clock to save the day — if only she can break out of a curious cycle of dead ends."
                            "popularity" => 1565.271
                            "poster_path" => "/onGdT8sYi89drvSJyEJnft97rOq.jpg"
                            "release_date" => "2022-02-04"
                            "title" => "Looop Lapeta"
                            "video" => false
                            "vote_average" => 5.9
                            "vote_count" => 29
                          ]
                          18 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/tutaKitJJIaqZPyMz7rxrhb4Yxm.jpg"
                            "genre_ids" => array:4 [
                              0 => 16
                              1 => 35
                              2 => 10751
                              3 => 10402
                            ]
                            "id" => 438695
                            "original_language" => "en"
                            "original_title" => "Sing 2"
                            "overview" => "Buster and his new cast now have their sights set on debuting a new show at the Crystal Tower Theater in glamorous Redshore City. But with no connections, he and his singers must sneak 
                      into the Crystal Entertainment offices, run by the ruthless wolf mogul Jimmy Crystal, where the gang pitches the ridiculous idea of casting the lion rock legend Clay Calloway in their show. Buster must embark on a quest to find the now-isolated Clay and persuade him to return to the stage."
                            "popularity" => 1427.712
                            "poster_path" => "/aWeKITRFbbwY8txG5uCj4rMCfSP.jpg"
                            "release_date" => "2021-12-01"
                            "title" => "Sing 2"
                            "video" => false
                            "vote_average" => 8.2
                            "vote_count" => 2152
                          ]
                          19 => array:14 [
                            "adult" => false
                            "backdrop_path" => "/xHRabofjmMGoIV3mb6xgy4nwOcS.jpg"
                            "genre_ids" => array:1 [
                              0 => 27
                            ]
                            "id" => 801071
                            "original_language" => "en"
                            "original_title" => "The Jack in the Box: Awakening"
                            "overview" => "When a vintage Jack-in-the-box is opened by a dying woman, she enters into a deal 
                      with the demon within that would see her illness cured in return for helping it claim six innocent victims."
                            "popularity" => 1345.061
                            "poster_path" => "/3Ib8vlWTrAKRrTWUrTrZPOMW4jp.jpg"
                            "release_date" => "2022-01-03"
                            "title" => "The Jack in the Box: Awakening"
                            "video" => false
                            "vote_average" => 5.4
                            "vote_count" => 42
                          ]
                        ]
                        "total_pages" => 32614
                        "total_results" => 652277
                      ]
                    ]
                ],
                200
            ),
        ]);
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Popular Movies');
    }
}
