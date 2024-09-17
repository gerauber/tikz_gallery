\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1.2]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=3cm of em] (ep) {\(e^+\)};
        \vertex[below right=1.5cm and 1.5cm of em] (m);
        \vertex[right=2cm of m] (m1);
        \vertex[right=5cm of ep] (mum) {\(\tau^+\)};
        \vertex[right=5cm of em] (mup) {\(\tau^-\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label={$ \gamma , \, Z$}] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        };
    \end{feynman}
\end{tikzpicture}

\begin{tikzpicture}[scale=1.2]
    \begin{feynman}
        \vertex (b) {\( \tau^-\)};
        \vertex[below right=0.4cm and 2cm of b] (bs);
        \vertex[right=4cm of b] (s) {\(\nu_\tau\)};
        \vertex[below right=1cm and 0.5cm of bs] (lp);
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\( \bar{\nu}_\ell, \, \bar{u}, \, \bar{u}\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\( \ell^-, \, s, \, d \)};
        
        \diagram* {
        (b) -- [fermion] (bs),
        (bs) -- [fermion] (s),
        (bs) --[boson, edge label'=\(\ W^-\)] (lp),
        (x2) -- [fermion] (lp) -- [fermion] (x1),
        };
    \end{feynman}
\end{tikzpicture}
\hspace{0.5cm}
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (b) {\(b\)};
        \vertex[below right=0.2cm and 1cm of b] (b1);
        \vertex[below right=0.2cm and 1cm of b1] (bs);
        \vertex[right=2cm of b1] (s1);
        \vertex[right=4cm of b] (s) {\(s\)};
        \vertex[below right=0.7cm and 0.5cm of bs] (lp);
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\(x^-\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\(x^+\)};

        \diagram* {
        (b) -- [fermion] (b1),
        (b1) -- [fermion] (bs),
        (bs) -- [fermion] (s1),
        (s1) -- [fermion] (s),
        (b1) --[boson, edge label=\(\ W^-\), quarter left] (s1),
        (bs) --[scalar, edge label=\(\ S\), quarter right] (lp),
        (x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}

\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=2cm of em] (ep) {\(e^+\)};
        \vertex[below right=1cm and 1cm of em] (m);
        \vertex[right=1cm of m] (m1);
        \vertex[right=3cm of ep] (mum) {\(\mu^+\)};
        \vertex[right=3cm of em] (mup) {\(\mu^-\)};
        \vertex[above right=0.6cm and 2.4cm of ep] (z1);
        \vertex[above right=0.4cm and 1.5cm of z1] (z2);
        \vertex[right=1.5cm of mum] (x1) {\(\bar{\nu}_\ell, \bar{\chi}\)};
        \vertex[right=1.5cm of mup] (x2) {\(\nu_\ell, \chi\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label=\(\ \gamma^*\)] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        (z1) --[boson, edge label=\(\ Z'\)] (z2),
        (x1) -- [fermion] (z2) -- [fermion] (x2),
        %(bs) --[scalar, edge label=\(\ S\), quarter right] (lp),
        %(x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}
\hspace{1cm}
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=2cm of em] (ep) {\(e^+\)};
        \vertex[below right=1cm and 1cm of em] (m);
        \vertex[right=1cm of m] (m1);
        \vertex[right=3cm of ep] (mum) {\(\mu^+\)};
        \vertex[right=3cm of em] (mup) {\(\mu^-\)};
        \vertex[above right=0.6cm and 2.4cm of ep] (z1);
        \vertex[above right=0.4cm and 1.5cm of z1] (z2);
        \vertex[right=1.5cm of mum] (x1) {\(\tau^+\)};
        \vertex[right=1.5cm of mup] (x2) {\(\tau^-\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label=\(\ W^-\)] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        (z1) --[boson, edge label=\(\ Z'\)] (z2),
        (x1) -- [fermion] (z2) -- [fermion] (x2),
        %(bs) --[scalar, edge label=\(\ S\), quarter right] (lp),
        %(x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}

\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (b) {\( \tau\)};
        \vertex[below right=0.4cm and 2cm of b] (bs);
        \vertex[right=4cm of b] (s) {\(\nu_\tau\)};
        \vertex[below right=0.7cm and 0.5cm of bs] (lp);
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\( \nu_\ell\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\(\ell\)};

        \diagram* {
        (b) -- [fermion] (bs),
        (bs) -- [fermion] (s),
        (bs) --[scalar, edge label=\(\ W\)] (lp),
        (x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}
\hspace{1.5cm}
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (b) {\( \tau\)};
        \vertex[below right=0.4cm and 2cm of b] (bs);
        \vertex[right=4cm of b] (s) {\(\nu_\tau\)};
        %\node[shape=circle,fill=blue] (m) at ( 0, 0) {};
        %\vertex[below right=0.7cm and 0.5cm of bs,blob] (lp) {} ;
        \vertex[below right=0.7cm and 0.5cm of bs] (lp) {} ;
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\( \pi\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\( \pi^0\)};

        \diagram* {
        (b) -- [fermion] (bs),
        (bs) -- [fermion] (s),
        (bs) --[scalar, edge label=\(\ W\)] (lp),
        (x1) --  (lp) --  (x2),
        };
        \node[circle, minimum size=0.3cm, fill=white] (m) at (lp) {};
        \node[circle, minimum size=0.3cm, draw, pattern=north east lines] (m) at (lp) {};
    \end{feynman}
\end{tikzpicture}