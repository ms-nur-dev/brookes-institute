<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CoursesController extends AbstractController
{
    #[Route('/formations', name: 'app_courses')]
    public function index(): Response
    {
        return $this->render('courses/index.html.twig');
    }

    #[Route('/formations/{slug}', name: 'app_course_show')]
    public function show(string $slug): Response
    {
        
        $commonPublic = 'Professionnels, demandeurs d\'emploi, étudiants ou toute personne souhaitant un perfectionnement ciblé en anglais dans un cadre professionnel et/ou certifiant.';
        $commonModalites = 'Mixte (présentiel et distanciel). Supports de cours structurés (PDF, PPT). Méthodes actives (jeux de rôle, simulations) et outils interactifs (Google Meet, tableaux blancs).';
        $commonEvaluation = 'Évaluations formatives continues (quiz, retours formateur) et évaluation sommative en fin de parcours via un livrable écrit et/ou une épreuve orale.';

        $courses = [
            // ==========================================
            // FORMULE FULL (60H)
            // ==========================================
            'full' => [
                'ref' => 'ANG-FULL-0060',
                'title' => 'Formule Full',
                'hours' => 60,
                'price' => 4200,
                'description' => 'Acquérir une maîtrise fluide et stratégique de l’anglais professionnel. Être autonome dans toutes les situations, se préparer à des tests de haut niveau et développer des compétences de leadership.',
                'public' => $commonPublic . ' Niveau A1/A2 minimum conseillé.',
                'modalites' => $commonModalites,
                'evaluation' => $commonEvaluation,
                'modules' => [
                    [
                        'id' => 1,
                        'title' => 'Module 1 : Bilan de compétences linguistiques & parcours',
                        'duration' => '2h',
                        'objectives' => 'Déterminer avec précision le niveau CECRL, cibler les axes de progression et élaborer un plan individualisé.',
                        'chapters' => ['Chapitre 1. Test oral et écrit détaillé', 'Chapitre 2. Analyse des usages professionnels', 'Chapitre 3. Entretien pédagogique personnalisé'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Module 2 : Grammaire avancée & précision linguistique',
                        'duration' => '6h',
                        'objectives' => 'Renforcer la correction grammaticale et syntaxique. Éviter les anglicismes et erreurs classiques.',
                        'chapters' => ['Chapitre 1. Structures complexes', 'Chapitre 2. Phrasal verbs', 'Chapitre 3. Discours indirect, style indirect', 'Chapitre 4. Exercices ciblés + correction fine'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Module 3 : Expression orale et prise de parole en public',
                        'duration' => '10h',
                        'objectives' => 'Améliorer l\'aisance, l’intonation et la persuasion. S’exprimer avec clarté en contexte formel et informel.',
                        'chapters' => ['Chapitre 1. Présentations professionnelles', 'Chapitre 2. Pitch et animation de réunion', 'Chapitre 3. Storytelling', 'Chapitre 4. Coaching vocal et body language'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Module 4 : Compréhension & traitement de documents authentiques',
                        'duration' => '8h',
                        'objectives' => 'Comprendre des documents exigeants. Savoir reformuler, extraire et synthétiser.',
                        'chapters' => ['Chapitre 1. Articles spécialisés', 'Chapitre 2. Rapports', 'Chapitre 3. Vidéos longues, podcasts', 'Chapitre 4. Exercices de reformulation et d’analyse'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 5,
                        'title' => 'Module 5 : Anglais des affaires & correspondance professionnelle',
                        'duration' => '8h',
                        'objectives' => 'Rédiger des documents professionnels efficaces. Gérer des échanges professionnels à l’écrit.',
                        'chapters' => ['Chapitre 1. E-mails', 'Chapitre 2. Propositions', 'Chapitre 3. Bilans', 'Chapitre 4. Lettres de motivation', 'Chapitre 5. Ton professionnel, diplomatie, persuasion'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 6,
                        'title' => 'Module 6 : Interactions interculturelles & leadership international',
                        'duration' => '6h',
                        'objectives' => 'Adapter son style de communication selon les cultures. Développer un leadership interculturel.',
                        'chapters' => ['Chapitre 1. Prise de décision', 'Chapitre 2. Gestion d’équipe', 'Chapitre 3. Feedback', 'Chapitre 4. Études de cas réels et jeux de rôle'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 7,
                        'title' => 'Module 7 : Préparation aux certifications & entretiens',
                        'duration' => '6h',
                        'objectives' => 'Réussir un test de haut niveau (C1-C2 ou pro). Réussir un entretien RH ou technique en anglais.',
                        'chapters' => ['Chapitre 1. TOEIC, TOEFL, IELTS, Linguaskill – stratégie et pratique', 'Chapitre 2. Simulations d’entretien complexe'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ],
                    [
                        'id' => 8,
                        'title' => 'Module 8 : Consolidation & pratique immersive',
                        'duration' => '14h',
                        'objectives' => 'Réutiliser tous les acquis dans un contexte réaliste. Travailler la spontanéité et l’endurance linguistique.',
                        'chapters' => ['Chapitre 1. Discussions approfondies', 'Chapitre 2. Débats', 'Chapitre 3. Projets collaboratifs', 'Chapitre 4. Présentation finale', 'Chapitre 5. Coaching individuel'],
                        'modalites' => 'Ateliers pratiques, correction personnalisée, coaching.'
                    ]
                ]
            ],


            // ==========================================
            // FORMULE PERFORMER (50H)
            // ==========================================
            'performer' => [
                'ref' => 'ANG-PERFORMER-OO50',
                'title' => 'Formule Performer',
                'hours' => 50,
                'price' => 3600,
                'description' => 'Développer des compétences linguistiques solides et autonomes. Maîtriser les codes linguistiques et culturels de l’anglais des affaires.',
                'public' => $commonPublic . ' Niveau A1/A2 minimum conseillé.',
                'modalites' => $commonModalites,
                'evaluation' => $commonEvaluation,
                'modules' => [
                    [
                        'id' => 1,
                        'title' => 'Module 1 : Diagnostic & Objectifs personnalisés',
                        'duration' => '1h',
                        'objectives' => 'Identifier le niveau réel du stagiaire (CECRL) et définir un parcours individualisé.',
                        'chapters' => ['Chapitre 1. Test de positionnement (oral & écrit)', 'Chapitre 2. Auto-évaluation commentée', 'Chapitre 3. Entretien pédagogique', 'Chapitre 4. Élaboration d’un plan d’apprentissage'],
                        'modalites' => 'Test écrit, entretien oral, restitution individualisée.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Module 2 : Renforcement grammatical et lexical ciblé',
                        'duration' => '6h',
                        'objectives' => 'Consolider les bases grammaticales avancées. Maîtriser un vocabulaire professionnel spécialisé.',
                        'chapters' => ['Chapitre 1. Structures avancées (discours indirect, tournures complexes)', 'Chapitre 2. Lexique métier approfondi (finance, tech, RH…)'],
                        'modalites' => 'Exercices d\'application, grammaire en contexte.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Module 3 : Expression orale intensive & interaction',
                        'duration' => '8h',
                        'objectives' => 'Développer l’aisance et la spontanéité. Gérer des situations complexes en anglais professionnel.',
                        'chapters' => ['Chapitre 1. Prise de parole : argumentation, leadership, improvisation', 'Chapitre 2. Jeux de rôle : gestion de conflit, réunions stratégiques'],
                        'modalites' => 'Ateliers intensifs, retours individualisés.'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Module 4 : Compréhension de documents complexes',
                        'duration' => '6h',
                        'objectives' => 'Comprendre des documents authentiques complexes et développer les capacités d’analyse critique.',
                        'chapters' => ['Chapitre 1. Articles spécialisés', 'Chapitre 2. Vidéos professionnelles, conférences TED', 'Chapitre 3. Études de cas et synthèse d’informations'],
                        'modalites' => 'Lecture guidée, visionnage interactif.'
                    ],
                    [
                        'id' => 5,
                        'title' => 'Module 5 : Rédaction professionnelle stratégique',
                        'duration' => '6h',
                        'objectives' => 'Produire des écrits professionnels clairs et efficaces. Maîtriser les codes rédactionnels.',
                        'chapters' => ['Chapitre 1. Emails et comptes rendus', 'Chapitre 2. Offres, bilans, executive summaries', 'Chapitre 3. Ton, clarté, persuasion et mise en forme'],
                        'modalites' => 'Rédaction guidée + révisions.'
                    ],
                    [
                        'id' => 6,
                        'title' => 'Module 6 : Inter culturalité & leadership à l’international',
                        'duration' => '5h',
                        'objectives' => 'Comprendre les comportements culturels. Développer son influence en environnement multiculturel.',
                        'chapters' => ['Chapitre 1. Leadership interculturel', 'Chapitre 2. Gestion de réunion en contexte international', 'Chapitre 3. Adaptation de son style de communication'],
                        'modalites' => 'Études de cas, jeux de rôle, retours croisés.'
                    ],
                    [
                        'id' => 7,
                        'title' => 'Module 7 : Préparation certification & entretiens avancés',
                        'duration' => '5h',
                        'objectives' => 'Se préparer à des tests avancés ou à des entretiens de haut niveau.',
                        'chapters' => ['Chapitre 1. TOEIC, IELTS, Linguaskill – stratégies et entraînement', 'Chapitre 2. Simulation d’entretien RH et technique'],
                        'modalites' => 'Test blanc + feedback individualisé.'
                    ],
                    [
                        'id' => 8,
                        'title' => 'Module 8 : Mise en pratique continue & consolidation',
                        'duration' => '13h',
                        'objectives' => 'Réutiliser les acquis dans des projets réels. Développer la confiance et l’autonomie sur la durée.',
                        'chapters' => ['Chapitre 1. Projets collaboratifs', 'Chapitre 2. Échanges prolongés', 'Chapitre 3. Études de cas longues', 'Chapitre 4. Présentations finales', 'Chapitre 5. Coaching individuel'],
                        'modalites' => 'Ateliers immersifs, suivi personnalisé.'
                    ]
                ]
            ],

        // ==========================================
            // FORMULE MIDWAY (40H)
            // ==========================================
            'midway' => [
                'ref' => 'ANG-MIDWAY-0040',
                'title' => 'Formule Midway',
                'hours' => 40,
                'price' => 2800,
                'description' => 'Le compromis parfait pour développer des compétences linguistiques solides, maîtriser les codes culturels et réussir un test de certification.',
                'public' => $commonPublic . ' Niveau B1 minimum conseillé.',
                'modalites' => $commonModalites,
                'evaluation' => $commonEvaluation,
                'modules' => [
                    [
                        'id' => 1,
                        'title' => 'Module 1 : Diagnostic et objectifs personnalisés',
                        'duration' => '2h',
                        'objectives' => 'Identifier le niveau réel et définir un parcours de formation individualisé et progressif.',
                        'chapters' => ['Chapitre 1. Test de positionnement oral et écrit', 'Chapitre 2. Auto-évaluation commentée', 'Chapitre 3. Entretien pédagogique individuel', 'Chapitre 4. Élaboration d’un plan d’apprentissage personnalisé'],
                        'modalites' => 'Test écrit + entretien oral + restitution individualisée.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Module 2 : Consolidation des bases et structures complexes',
                        'duration' => '8h',
                        'objectives' => 'Réviser les bases grammaticales et approfondir les structures de l’anglais professionnel.',
                        'chapters' => ['Chapitre 1. Révisions ciblées (temps, modaux, passif)', 'Chapitre 2. Grammaire avancée (subjonctif, discours rapporté)', 'Chapitre 3. Vocabulaire spécialisé (business, technique, finance)'],
                        'modalites' => 'Exercices pratiques, quiz interactifs, ateliers corrigés.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Module 3 : Communication écrite et orale',
                        'duration' => '10h',
                        'objectives' => 'Développer sa fluidité et sa précision. Produire des écrits professionnels adaptés.',
                        'chapters' => ['Chapitre 1. Expression orale : réunions, négociations, présentations', 'Chapitre 2. Compréhension orale : conférences, podcasts', 'Chapitre 3. Rédaction : rapports, synthèses, emails stratégiques'],
                        'modalites' => 'Simulations, documents authentiques, corrections personnalisées.'
                    ],
                    [
                        'id' => 4,
                        'title' => 'Module 4 : Contexte culturel et inter culturel',
                        'duration' => '6h',
                        'objectives' => 'Comprendre les codes culturels internationaux et gérer les situations sensibles.',
                        'chapters' => ['Chapitre 1. Décryptage des comportements culturels en entreprise', 'Chapitre 2. Conversation informelle et registre adapté', 'Chapitre 3. Do’s & Don’ts dans les contextes internationaux'],
                        'modalites' => 'Études de cas, jeux de rôle, analyse de situations réelles.'
                    ],
                    [
                        'id' => 5,
                        'title' => 'Module 5 : Mise en situation intensive & correction',
                        'duration' => '8h',
                        'objectives' => 'Renforcer les acquis par des simulations intensives et corriger les erreurs récurrentes.',
                        'chapters' => ['Chapitre 1. Simulations métiers (entretiens, réunions, négociations)', 'Chapitre 2. Feedback ciblé sur erreurs fréquentes', 'Chapitre 3. Stratégies de communication efficace'],
                        'modalites' => 'Jeux de rôle, mises en pratique, feedback individualisé.'
                    ],
                    [
                        'id' => 6,
                        'title' => 'Module 6 : Objectif réussite test / certification',
                        'duration' => '6h',
                        'objectives' => 'Préparer efficacement un test officiel (TOEIC, TOEFL...) et optimiser ses stratégies.',
                        'chapters' => ['Chapitre 1. Entraînement ciblé selon le test choisi', 'Chapitre 2. Simulation d’entretien professionnel en anglais', 'Chapitre 3. Test blanc et analyse détaillée des résultats'],
                        'modalites' => 'Tests blancs, mises en situation d’entretien, feedback personnalisé.'
                    ]
                ]
            ],

        // Vérifie si la formation demandée existe dans l'URL
        if (!array_key_exists($slug, $courses)) {
            throw $this->createNotFoundException('Cette formation n\'existe pas au catalogue.');
        }

        return $this->render('courses/show.html.twig', [
            'course' => $courses[$slug],
        ]);
    }
}