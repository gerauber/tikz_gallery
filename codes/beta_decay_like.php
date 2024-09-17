\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (u_n) {\(u\)};
        \vertex[below=1.5em of u_n] (d_n) {\(d\)};
        \vertex[below=1.5em of d_n] (d2_n) {\(d\)};
        \vertex[below=3em of d2_n] (ne_n) {\(\nu_e\)};
        \vertex[right=4cm of u_n] (u_p) {\(u\)};
        \vertex[right=4cm of d_n] (d_p) {\(d\)};
        \vertex[right=4cm of d2_n] (u2_p) {\(u\)};
        \vertex[right=4cm of ne_n] (e_p) {\(e^-\)};
        \vertex[below right=0.5em and 2cm of u_n] (m_un_up);
        \vertex[below right=0.5em and 2cm of d_n] (m_dn_dp);
        \vertex[below right=0.5em and 2cm of d2_n] (m_d2n_u2p);
        \vertex[above right=0.5em and 2cm of ne_n] (m_nen_ep);

        \diagram* {
        (u_n) -- [fermion] (m_un_up) -- [fermion] (u_p),
        (d_n) -- [fermion] (m_dn_dp) -- [fermion] (d_p),
        (d2_n) -- [fermion] (m_d2n_u2p) -- [fermion] (u2_p),
        (ne_n) -- [fermion] (m_nen_ep) -- [fermion] (e_p),
        (m_d2n_u2p) -- [boson, edge label=\(\ W\)] (m_nen_ep),
        };

        \draw [decoration={brace}, decorate] (d2_n.south west) -- (u_n.north west)
        node [pos=0.5, left] {\(n\)};
        \draw [decoration={brace}, decorate] (u_p.north east) -- (u2_p.south east)
        node [pos=0.5, right] {\(p\)};
    \end{feynman}
\end{tikzpicture}