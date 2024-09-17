
<div class="text-container">Here is a collection of Feynman diagrams I’ve drawn over the course of my academic journey. 
    These diagrams are just a few examples of the many I’ve used to represent complex particle interactions. 
    While not a complete set, they showcase the continuous effort to visualize and understand the underlying physics. </div>
    
<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> b -> s l l transition</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (a1) {\(b\)}; 
        \vertex[right=1.2cm of a1] (a2);
        \vertex[right=1.6cm of a2] (a3);
        \vertex[right=1.2cm of a3] (a4) {\(s\)};
        \vertex[below=2em of a1] (b1); 
        \vertex[below=2em of a4] (b2);
        \vertex at ($(a2)!0.5!(a3)!1cm!90:(a3)$) (d); 
        \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)}; 
        \vertex at ($(c1)!0.5!(c3) - (1.5cm, 0)$) (c2);
        
        \diagram* {
        (a1) -- [fermion] (a2) -- [fermion, edge label={$u, \, c, \, t$}] (a3) -- [fermion] (a4),
        (c3) -- [fermion] (c2) -- [fermion] (c1), (a2) -- [boson, quarter left, edge label=\(W^{-}\)] (d) -- [boson, quarter left] (a3),
        (d) -- [boson, bend left, edge label={$\gamma, \,  Z^{0}$}] (c2),
        };
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2sll_loop.svg" alt="b to s l l transition, loop diagram" class="picture-block small-picture">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> b -> s l l transition</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (a1) {\(b\)}; 
        \vertex[right=1.2cm of a1] (a2);
        \vertex[right=1.6cm of a2] (a3);
        \vertex[right=1.2cm of a3] (a4) {\(s\)};
        \vertex[below=1em of a1] (b1); 
        \vertex[below=1em of a4] (b2);
        \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)};
        \vertex[right=0.2cm of a2] (d2);
        \vertex[right=0.2cm of a3] (d3);
        \vertex[above=2.5em of d2] (c2); 
        \vertex[above=2.5em of d3] (c4);
        
        \diagram* {
        (a1) -- [fermion] (a2) -- [fermion, edge label={$u, \, c, \, t$}] (a3) -- [fermion] (a4),
        (c3) -- [fermion] (c2) -- [fermion, edge label=\(\nu\),near end] (c4) -- [fermion] (c1), 
        (a2) -- [boson, edge label=\(W^{-}\)] (c2),
        (a3) -- [boson, edge label'=\(W^{-}\), near end] (c4)
        };
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2sll_box.svg" alt="b to s l l transition, box diagram" class="picture-block small-picture">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> b -> s l l transition</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
\begin{feynman}[small]
    \vertex (a1) {\(b\)}; 
    \vertex[right=1.2cm of a1] (a2);
    \vertex[right=0.8cm of a2] (a5);
    \vertex[right=0.8cm of a5] (a3);
    \vertex[right=1.2cm of a3] (a4) {\(s\)};
    \vertex[below=2em of a1] (b1); 
    \vertex[below=2em of a4] (b2);
    \vertex at ($(a2)!0.5!(a3)!1cm!90:(a3)$) (d); 
    \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
    \vertex[above=2em of c1] (c3) {\(\ell^{+}\)}; 
    \vertex at ($(c1)!0.5!(c3) - (1.5cm, 0)$) (c2);
    
    \diagram* {
    (a1) -- [fermion] (a5)-- [fermion] (a4),
    (c3) -- [fermion] (c2) -- [fermion] (c1), 
    (a5) -- [boson, edge label=\(Z'\)] (c2),
    };
\end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2sll_zprime.svg" alt="b to s l l transition, Z'" class="picture-block small-picture">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> b -> s l l transition</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
\begin{feynman}[small]
    \vertex (a1) {\(b\)}; 
    \vertex[right=1.2cm of a1] (a2);
    \vertex[right=0.8cm of a2] (a5);
    \vertex[right=0.8cm of a5] (a3);
    \vertex[right=1.2cm of a3] (a4) {\(s\)};
    
    \vertex[below=2em of a1] (b1); 
    \vertex[below=2em of a4] (b2);
    
    \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
    \vertex[above=2em of c1] (c3) {\(\ell^{+}\)};
    
    \diagram* {
    (a1) -- [fermion] (a2) -- [boson, edge label=\(LQ\),near end] (a3) -- [fermion] (a4),
    (c3) -- [fermion] (a2),
    (a3) -- [fermion] (c1), 
    };
\end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2sll_lq.svg" alt="b to s l l transition, lepto quark" class="picture-block small-picture">
</div>


<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> J/Psi to l l </p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (c3) {\(\overline c\)};
        \vertex[below=2em of c3] (c1) {\(c\)};
        \vertex at ($(c3)!0.5!(c1) - (-1cm, 0)$) (c2);
        \vertex[right=3cm of c1] (l1) {\(\ell^{-} \)}; 
        \vertex[right=3cm of c3] (l3) {\(\ell^{+} \)}; 
        \vertex at ($(l1)!0.5!(l3) - (1cm, 0)$) (l2);

        \diagram* {
        (l3) -- [fermion] (l2) -- [fermion] (l1),
        (c1) -- [fermion] (c2) -- [fermion] (c3),
        (c2) -- [boson, edge label={$\gamma, \, Z^{0}$}] (l2),
        };

        \draw [decoration={brace}, decorate] (c1.south west) -- (c3.north west)
        node [pos=0.5, left] {\(J/\psi\) \textcolor{white}{.}};
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/jpsitoll.svg" alt="J/Psi to ll" class="picture-block small-picture">
</div>


<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> W couplings</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...

\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3);
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(d\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{u}\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3);
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(s\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{u}\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}

\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3) {\(g_\mu\)};
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(\mu^-\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{\nu}_\mu\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3) {\(g_\tau\)};
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(\tau^-\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{\nu}_\tau\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        (w2) -- [fermion] (l),
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/w_couplings.svg" alt="W couplings" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> B to J/Psi K pi pi</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}
        \vertex (b1) {\(u\)}; 
        \vertex[right=2cm of b1] (b3);
        \vertex[right=2.5cm of b3] (b4);
        \vertex[right=3cm of b4] (b2) {\(u\)};
        \vertex[above=2em of b2] (a4) {\(\overline s\)};
        \vertex[above=4em of a4] (c1) {\(c\)}; 
        \vertex[above=2em of c1] (c3) {\(\overline c\)}; 
        \vertex at ($(c1)!0.5!(a4) - (3cm, 0)$) (c2);
        \vertex[below=3em of b2] (d1) {\(d\)};
        \vertex[below=2em of d1] (d2) {\(\overline u\)};
        \vertex[below=3em of d2] (d3) {\(\overline d\)};
        \vertex[below=2em of d3] (d4) {\(u\)};
        \vertex at ($(d2)!0.5!(d4) - (4cm, 0)$) (e1);
        \vertex at ($(d1)!0.5!(d3) - (2.5cm, 0)$) (e2);
        \vertex [above=8em of b1] (h1) {\(\overline b\)};
        \vertex [right=4.2cm of h1] (h2);
        
        \diagram* {
        (c3) -- [fermion] (h2) -- [fermion] (h1),
        (a4) -- [fermion] (c2) -- [fermion] (c1),
        (c2) -- [boson, edge label=\(W^{+}\)] (h2),
        (b1) -- [fermion] (b3) -- [fermion] (b4) -- [fermion] (b2),
        (d2) -- [fermion] (e1) -- [fermion] (d4), 
        (d3) -- [fermion] (e2) -- [fermion] (d1), 
        (b3) -- [gluon, edge label=\(g\)] (e1), 
        (b4) -- [gluon, edge label=\(g\)] (e2), 
        };
        
        \draw [decoration={brace}, decorate] (b1.south west) -- (h1.north west)
        node [pos=0.5, left] {\(B^{+}\)};
        \draw [decoration={brace}, decorate] (c3.north east) -- (c1.south east)
        node [pos=0.5, right] {\(J/\psi\)};
        \draw [decoration={brace}, decorate] (a4.north east) -- (b2.south east)
        node [pos=0.5, right] {\(K^{+}\)};
        \draw [decoration={brace}, decorate] (d1.north east) -- (d2.south east)
        node [pos=0.5, right] {\(\pi^{-}\)};
        \draw [decoration={brace}, decorate] (d3.north east) -- (d4.south east)
        node [pos=0.5, right] {\(\pi^{+}\)};
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2jpsikpipi.svg" alt="B to J/Psi K pi pi" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> B to K pi pi l l</p>
        <code>
\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}
        \vertex (a1) {\(\overline b\)}; 
        \vertex[right=2.5cm of a1] (a2);
        \vertex[right=2.5cm of a2] (a3);
        \vertex[right=2.5cm of a3] (a4) {\(\overline s\)};
        \vertex[below=2em of a1] (b1) {\(u\)}; 
        \vertex[right=2cm of b1] (b3);
        \vertex[right=2.5cm of b3] (b4);
        \vertex[below=2em of a4] (b2) {\(u\)};
        \vertex at ($(a2)!0.5!(a3)!1cm!90:(a3)$) (d); 
        \vertex[above=4em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)}; 
        \vertex at ($(c1)!0.5!(c3) - (3cm, 0)$) (c2);
        \vertex[below=3em of b2] (d1) {\(d\)};
        \vertex[below=2em of d1] (d2) {\(\overline u\)};
        \vertex[below=3em of d2] (d3) {\(\overline d\)};
        \vertex[below=2em of d3] (d4) {\(u\)};
        \vertex at ($(d2)!0.5!(d4) - (4cm, 0)$) (e1);
        \vertex at ($(d1)!0.5!(d3) - (2.5cm, 0)$) (e2);
        
        \diagram* {
        (a4) -- [fermion] (a3) -- [fermion, edge label={$\overline{u}, \, \overline{c}, \, \overline{t}$}] (a2) -- [fermion] (a1),
        (c3) -- [fermion] (c2) -- [fermion] (c1), 
        (a2) -- [boson, quarter left, edge label=\(W^{+}\)] (d) -- [boson, quarter left] (a3),
        (d) -- [boson, bend left, edge label={$\gamma, \,  Z^{0}$}] (c2),
        (b1) -- [fermion] (b3) -- [fermion] (b4) -- [fermion] (b2),
        (d2) -- [fermion] (e1) -- [fermion] (d4), 
        (d3) -- [fermion] (e2) -- [fermion] (d1), 
        (b3) -- [gluon, edge label=\(g\)] (e1), 
        (b4) -- [gluon, edge label=\(g\)] (e2), 
        };
        
        \draw [decoration={brace}, decorate] (b1.south west) -- (a1.north west)
        node [pos=0.5, left] {\(B^{+}\)};
        \draw [decoration={brace}, decorate] (a4.north east) -- (b2.south east)
        node [pos=0.5, right] {\(K^{+}\)};
        \draw [decoration={brace}, decorate] (d1.north east) -- (d2.south east)
        node [pos=0.5, right] {\(\pi^{-}\)};
        \draw [decoration={brace}, decorate] (d3.north east) -- (d4.south east)
        node [pos=0.5, right] {\(\pi^{+}\)};
    \end{feynman}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/b2kpipill.svg" alt="B to K pi pi l l" class="picture-block">
</div>
