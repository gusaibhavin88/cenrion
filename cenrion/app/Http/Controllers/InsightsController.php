<?php

namespace App\Http\Controllers;

class InsightsController extends Controller
{
    /**
     * The full articles dataset.
     */
    private function articles(): array
    {
        return [
            [
                'slug'         => 'where-generative-ai-creates-value',
                'title'        => 'Where Generative AI Actually Creates Business Value',
                'category'     => 'AI & Applied Tech',
                'reading_time' => '8 min read',
                'author'       => 'Cenrion Engineering',
                'date'         => 'October 2026',
                'excerpt'      => 'Despite billions in enterprise investment, most generative AI projects fail to move beyond pilot stage. The difference between those that do and those that stall often comes down to a precise understanding of where the technology genuinely creates value—and where it simply creates noise.',
                'content'      => [
                    'Despite billions in enterprise investment, most generative AI projects fail to move beyond pilot stage. The difference between those that do and those that stall often comes down to a precise understanding of where the technology genuinely creates value—and where it simply creates noise. At Cenrion, we have worked across dozens of AI deployments and observed a clear pattern: organisations that succeed treat generative AI as an accelerant applied to well-defined, high-frequency knowledge tasks rather than a general-purpose oracle dropped into ambiguous workflows.',
                    'The clearest value clusters around three problem shapes. First, structured content generation at scale—drafting, summarising, and transforming documents, proposals, code, and reports where the inputs are well-scoped and the outputs are reviewer-validated rather than autonomously published. Second, augmented search and synthesis over proprietary knowledge bases, where a model connected to internal data dramatically reduces time-to-insight for analysts, engineers, and customer-facing teams. Third, conversational interfaces over complex systems—replacing multi-step UI workflows with natural-language instructions, particularly in back-office automation, CRM interaction, and developer tooling.',
                    'What these use cases share is a human-in-the-loop validation step and a measurable baseline to improve against. The organisations that struggle are those that deploy generative AI into fully autonomous decision flows without establishing ground truth, evaluation criteria, or fallback paths. Generative AI is not a strategy; it is a capability. The strategy is knowing exactly which friction points in your value chain it eliminates, by how much, and at what operating cost. That precision is the work—and it is where engineering intelligence makes the difference.',
                ],
            ],
            [
                'slug'         => 'ai-agents-vs-traditional-automation',
                'title'        => 'AI Agents vs Traditional Automation: Key Architectural Differences',
                'category'     => 'AI & Applied Tech',
                'reading_time' => '6 min read',
                'author'       => 'Cenrion Engineering',
                'date'         => 'September 2026',
                'excerpt'      => 'Traditional automation follows explicit, deterministic scripts. AI agents plan, reason, and adapt. Understanding the architectural boundary between these two paradigms is essential for engineering teams choosing the right tool for each problem.',
                'content'      => [
                    'Traditional automation—RPA, rule-based workflows, scheduled jobs—operates deterministically. Every execution path is defined at design time. This is a feature, not a limitation: deterministic systems are auditable, predictable, and straightforward to debug. They excel at high-volume, low-variance tasks where the state space is small and the rules are stable. The architectural signature of these systems is a finite state machine: inputs map to outputs through an exhaustive, pre-enumerated graph of transitions.',
                    'AI agents introduce a fundamentally different architecture. Rather than following a fixed execution graph, an agent maintains a working memory, selects from a toolkit of available actions, and uses a reasoning model to decide what to do next given its current observations. This makes agents capable of handling problems with large, dynamic state spaces—tasks where the correct sequence of steps cannot be enumerated at design time. The tradeoff is non-determinism: the same input can produce different action sequences across runs, which demands a different testing and evaluation discipline.',
                    'The architectural decision between the two is not about novelty—it is about the variance of the task. If every case follows the same path with minor parameter differences, traditional automation is the right call. If cases diverge materially based on context, if the system needs to recover from unexpected states, or if the "rules" are too complex to enumerate, an agent architecture becomes the appropriate tool. The most robust production systems we see are hybrid: deterministic pipelines for the predictable majority of cases, with agent components handling the long tail. Getting that boundary right is an engineering design problem, not a vendor selection problem.',
                ],
            ],
            [
                'slug'         => 'monolith-vs-microservices',
                'title'        => 'Monolith vs Microservices: When to Shift',
                'category'     => 'Engineering Strategy',
                'reading_time' => '7 min read',
                'author'       => 'Cenrion Engineering',
                'date'         => 'September 2026',
                'excerpt'      => 'The monolith-to-microservices journey is often driven by hype rather than engineering necessity. Knowing when the shift is genuinely warranted—and what the real costs are—can save teams years of avoidable complexity.',
                'content'      => [
                    'Microservices have become the default aspiration for growing engineering organisations, often adopted before the problems they solve are actually being experienced. The result is teams that spend enormous energy managing distributed systems complexity—network partitions, service discovery, distributed tracing, independent deployment pipelines—before they have achieved product-market fit or before their monolith has become a genuine bottleneck. A well-structured monolith can support substantial scale and dozens of engineers without decomposition, provided internal module boundaries are respected.',
                    'The signals that genuinely justify a decomposition are specific and operational, not theoretical. The first is independent scalability: when a single component has a fundamentally different load profile to the rest of the system and scaling the whole application is wasteful or insufficient. The second is team autonomy: when the deployment cadence of one team is consistently blocked by another and organisational Conway\'s Law makes a shared codebase untenable. The third is technology heterogeneity: when a subsystem has requirements—latency, language ecosystem, compliance boundary—that cannot be met within the host platform. If none of these pressures are present, decomposition is premature optimisation.',
                    'When the shift is warranted, the approach matters as much as the decision. Strangler fig patterns—incrementally extracting services while the monolith remains operational—consistently outperform "big bang" rewrites. The critical discipline is identifying seams: bounded contexts where data ownership is clean and inter-component communication is already well-defined. If seams do not exist naturally in the existing codebase, the first investment should be in establishing them internally, not in moving to microservices prematurely. Architecture follows organisation; getting the team structure right is often the prerequisite to getting the system architecture right.',
                ],
            ],
            [
                'slug'         => 'build-vs-buy-framework',
                'title'        => 'Build vs Buy: A Framework for Technology Decisions',
                'category'     => 'Engineering Strategy',
                'reading_time' => '5 min read',
                'author'       => 'Cenrion Engineering',
                'date'         => 'August 2026',
                'excerpt'      => 'The build-vs-buy decision is one of the most consequential in technology strategy, yet it is rarely made with sufficient rigour. A structured framework prevents both over-engineering and over-dependence on vendors.',
                'content'      => [
                    'Every technology decision sits somewhere on a spectrum between "build it entirely" and "buy a complete solution". The default is often determined by organisational culture—engineering-led organisations bias toward building, finance-led organisations toward buying—rather than by the actual characteristics of the problem. Neither instinct is reliable. A principled framework requires evaluating four dimensions: differentiation, integration complexity, total cost of ownership, and strategic control.',
                    'Differentiation is the most important variable. If the capability you are building is a source of competitive advantage—something that is genuinely distinctive in your product or that embodies proprietary process knowledge—building is almost always correct. If it is undifferentiated infrastructure, buying is almost always correct. The error patterns are symmetrical: organisations that buy in differentiated areas commoditise their most valuable capabilities and create vendor lock-in at the core; organisations that build in commodity areas waste scarce engineering capacity on problems that have already been solved at lower cost externally.',
                    'Integration complexity and total cost of ownership are where build-vs-buy analyses most commonly go wrong. The purchase price of a vendor solution rarely reflects its true cost: integration engineering, ongoing customisation, data migration, and licence escalation over a five-year horizon often exceed the cost of a purpose-built internal solution. Conversely, internal builds almost universally underestimate the long-term maintenance burden—documentation, on-call ownership, onboarding, and the accumulation of technical debt. The honest analysis requires projecting both scenarios over a realistic time horizon with fully-loaded costs, not comparing a build estimate against a sales proposal. Strategic control—the ability to change direction, integrate with future technology, and avoid dependency on a single vendor\'s roadmap—is the final dimension, and it carries particular weight in fast-moving domains where the vendor landscape may look entirely different in three years.',
                ],
            ],
        ];
    }

    /**
     * Display the insights listing page.
     */
    public function index()
    {
        return view('pages.insights.index', [
            'articles' => $this->articles(),
        ]);
    }

    /**
     * Display a single insight article.
     */
    public function show(string $slug)
    {
        $articles = $this->articles();

        $article = collect($articles)->firstWhere('slug', $slug);

        if (! $article) {
            abort(404);
        }

        return view('pages.insights.show', compact('article'));
    }
}
